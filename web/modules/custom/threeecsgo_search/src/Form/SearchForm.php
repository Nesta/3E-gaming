<?php
namespace Drupal\threeecsgo_search\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Drupal\user\Entity\User;

/**
 * Class SearchForm.
 *
 * @package Drupal\threeecsgo_search\Form
 */
class SearchForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'search_user_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['steamid'] = [
      '#type'     => 'textfield',
      '#title'    => $this->t('SteamID'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type'  => 'submit',
      '#value' => $this->t('Search'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (empty($form_state->getValue('steamid')) or !(is_numeric($form_state->getValue('steamid')))) {
      $form_state->setErrorByName('steamid', $this->t('Not blank and Numeric'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    global $base_url;

    $steamid = $form_state->getValue('steamid');

    $url_api_steam_1 = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v2/?key=9B2266D26FF1EEA14F77DFA355BF8FFB&steamids=" . $steamid;
    $content_url_1 = file_get_contents($url_api_steam_1);
    $json_steam_data = json_decode($content_url_1);

    $personaname = $json_steam_data->response->players[0]->personaname;

    $username_drupal = strtolower(str_replace(' ', '', preg_replace('([^A-Za-z0-9])', '',$personaname)));

    $user_register = user_load_by_name($username_drupal);

    if ($user_register == null) {
      $realname = $json_steam_data->response->players[0]->realname;
      $primaryclanid = $json_steam_data->response->players[0]->primaryclanid;
      $avatar = $json_steam_data->response->players[0]->avatarfull;
      $tmp = 'public://tmp/avatar.jpeg';
      file_put_contents($tmp, file_get_contents($avatar));

      $url_api_steam_2 = "http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=9B2266D26FF1EEA14F77DFA355BF8FFB&steamid=" . $steamid;
      $content_url_2 = file_get_contents($url_api_steam_2);
      $json_steam_stats = json_decode($content_url_2);

      $total_kills = $json_steam_stats->playerstats->stats[0]->value;
      $total_deaths = $json_steam_stats->playerstats->stats[1]->value;
      $total_time_played = $json_steam_stats->playerstats->stats[2]->value;
      $total_wins = $json_steam_stats->playerstats->stats[5]->value;
      $total_kills_headshot = $json_steam_stats->playerstats->stats[25]->value;
      $total_mvps = $json_steam_stats->playerstats->stats[102]->value;
      $total_rounds_played = $json_steam_stats->playerstats->stats[48]->value;
      $total_shots_fired = $json_steam_stats->playerstats->stats[47]->value;
      $total_shots_hit = $json_steam_stats->playerstats->stats[46]->value;

      // Create user object.
      $user = User::create();

      //Mandatory settings
      //$user->setPassword("password");
      $user->enforceIsNew();
      //$user->setEmail("email");
      $user->setUsername($username_drupal);
      //$user->addRole('authenticated');
      $user->{'steamid'}->setValue($steamid);
      $user->{'personaname'}->setValue($personaname);
      $user->{'primaryclanid'}->setValue($primaryclanid);

      if ($realname != NULL) {
        $user->{'realname'}->setValue($realname);
      }
      else {
        $user->{'realname'}->setValue('No name');
      }

      // Create file object from a locally copied file.
      $uri = file_unmanaged_copy($avatar, 'public://avatars/' . $steamid . '.jpg', FILE_EXISTS_REPLACE);
      $file = File::Create([
        'uri' => $uri,
      ]);
      $file->save();

      // Attach file in node.
      $user->avatarfull->setValue([
        'target_id' => $file->id(),
      ]);

      $user->{'total_deaths'}->setValue($total_deaths);
      $user->{'total_kills'}->setValue($total_kills);
      $user->{'total_time_played'}->setValue(($total_time_played/60)/60);
      $user->{'total_wins'}->setValue($total_wins);
      $user->{'total_kills_headshot'}->setValue($total_kills_headshot);
      $user->{'total_mvps'}->setValue($total_mvps);
      $user->{'total_rounds_played'}->setValue($total_rounds_played);
      $user->{'total_shots_fired'}->setValue($total_shots_fired);
      $user->{'total_shots_hit'}->setValue($total_shots_hit);

      $user->activate();
      $user->save();

      $form_state->setRedirectUrl(Url::fromUri($base_url . '/user/' . $user->id()));
    } else {
      $form_state->setRedirectUrl(Url::fromUri($base_url . '/user/' . $user_register->id()));
    }
  }
}
