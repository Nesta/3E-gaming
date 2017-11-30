<?php
namespace Drupal\threeecsgo_general\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;

/**
 * Class SettingsForm.
 *
 * @package Drupal\threeecsgo_general\Form
 */
class InventoryForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'inventory_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $user = \Drupal::currentUser();
    $current_user = User::load($user->id());

    $query_2 = \Drupal::entityQuery('node')
      ->condition('type', 'article')
      ->condition('status', 1)
      ->condition('owner_article', $current_user->id());

    $inventory = $query_2->execute();

    foreach ($inventory as $article_id) {
      $article = Node::load($article_id);

      $form[strtolower(str_replace(' ', '', preg_replace('([^A-Za-z0-9])', '', $article->get('title')->value)))] = [
        '#type' => 'checkbox',
        '#title' => $article->get('title')->value,
        '#id' => $article->id(),
        '#default_value' => $article->get('title')->value,
      ];
    }

    $form['submit'] = [
      '#type'  => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    foreach ($form as $i) {
      if ((!strpos($i, '#') !== false) and $i['#id'] != null and $i['#value'] == 1){
        $article = Node::load($i['#id']);
        $article->{'display'}->setValue(true);
        $article->save();
      }
    }
  }
}
