<?php
namespace Drupal\threeecsgo_general\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;

/**
 * Class ButtonUpdateInventoryForm.
 *
 * @package Drupal\threeecsgo_general\Form
 */
class ButtonUpdateInventoryForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'update_inventory_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['submit'] = [
      '#type'  => 'submit',
      '#value' => $this->t('Update my inventory'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    global $base_url;
    $current_user = \Drupal::currentUser();
    $user = User::load($current_user->id());

    $query = \Drupal::entityQuery('node')
      ->condition('type', 'article')
      ->condition('status', 1)
      ->condition('owner_article', $user->id());

    $inventory = $query->execute();

    foreach ($inventory as $article_id) {
      $node = Node::load($article_id);
      $node->delete();
    }

    // Create Inventory
    $user = user_load_by_name($user->getUsername());
    $url_api_steam_3 = "http://steamcommunity.com/profiles/" . $user->{'steamid'}->value . "/inventory/json/730/2";
    $content_url_3 = file_get_contents($url_api_steam_3);
    $json_steam_inventory = json_decode($content_url_3);
    $inventory = $json_steam_inventory->rgDescriptions;

    foreach ($inventory as $article) {
      if (strpos(strtoupper($article->market_name), 'CASE') != TRUE and strpos(strtoupper($article->market_name), 'KEY') != TRUE
        and strpos(strtoupper($article->market_name), 'GRAFFITI') != TRUE and strpos(strtoupper($article->market_name), 'MUSIC') != TRUE
        and strpos(strtoupper($article->market_name), 'MEDAL') != TRUE and strpos(strtoupper($article->market_name), 'COIN') != TRUE
        and strpos(strtoupper($article->market_name), 'TROPHY')) {
        $node_inventory = Node::create([
          'title' => $article->market_name,
          'type' => 'article',
          'status' => 1,
        ]);

        // Create file object from a locally copied file.
        $uri = file_unmanaged_copy("https://steamcommunity-a.akamaihd.net/economy/image/" . $article->icon_url, 'public://inventory/' . $article->market_name . '.jpg', FILE_EXISTS_REPLACE);
        $file = File::Create([
          'uri' => $uri,
        ]);
        $file->save();

        // Attach file in node.
        $node_inventory->image_article->setValue([
          'target_id' => $file->id(),
        ]);

        $node_inventory->{'owner_article'}->setValue($user->id());
        $node_inventory->{'display'}->setValue(FALSE);

        $tags = $article->tags;

        foreach ($tags as $tag) {
          if ($tag->category == "Exterior" or $tag->category == "Rarity" or $tag->category == "Quality") {
            $node_inventory->{strtolower($tag->category)}->setValue($tag->name);
          }
        }

        if ($node_inventory->{'exterior'} != null) {
          $node_inventory->save();
        }
      }
    }

    $form_state->setRedirectUrl(Url::fromUri($base_url . '/inventory/' . $user->id()));
  }
}
