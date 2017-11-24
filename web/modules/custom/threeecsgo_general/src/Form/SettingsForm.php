<?php
namespace Drupal\threeecsgo_general\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;

/**
 * Class SettingsForm.
 *
 * @package Drupal\threeecsgo_general\Form
 */
class SettingsForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'settings_user_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $user = \Drupal::currentUser();
    $current_user = \Drupal\user\Entity\User::load($user->id());

    $form['dpi'] = [
      '#type' => 'textfield',
      '#title' => $this->t('DPI'),
      '#required' => TRUE,
    ];

    $form['sensitivity'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Sensitivity'),
      '#required' => TRUE,
    ];

    $form['hz'] = [
      '#type' => 'textfield',
      '#title' => $this->t('HZ'),
      '#required' => TRUE,
    ];

    $form['zoom_sensitivity'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Zoom Sensitivity'),
      '#required' => TRUE,
    ];

    $form['mouse_acceleration'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Mouse Acceleration'),
    ];

    $form['windows_sensitivity'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Windows Sensitivity'),
      '#required' => TRUE,
    ];

    $form['raw_input'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Raw Input'),
    ];

    $settings = $current_user->get('setting')->entity;
    if( $settings != null ) {
      $form['dpi']['#default_value'] = $settings->get('dpi')->value;

      $form['sensitivity']['#default_value'] =  $settings->get('sensitivity')->value;

      $form['hz']['#default_value'] = $settings->get('hz')->value;

      $form['zoom_sensitivity']['#default_value'] = $settings->get('zoom_sensitivity')->value;

      $form['mouse_acceleration']['#default_value'] = $settings->get('mouse_acceleration')->value;

      $form['windows_sensitivity']['#default_value'] = $settings->get('windows_sensitivity')->value;

      $form['raw_input']['#default_value'] = $settings->get('raw_input')->value;
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
    global $base_url;
    $current_user = \Drupal::currentUser();
    $user = User::load($current_user->id());

    if ($user->get('setting')->entity == null) {
      $settings = Node::create([
        'title' => "Settings of " . $user->getUsername(),
        'type' => 'settings',
        'status' => 1,
      ]);
      $settings->{'dpi'}->setValue($form_state->getValue('dpi'));
      $settings->{'hz'}->setValue($form_state->getValue('hz'));
      $settings->{'mouse_acceleration'}->setValue($form_state->getValue('mouse_acceleration'));
      $settings->{'raw_input'}->setValue($form_state->getValue('raw_input'));
      $settings->{'sensitivity'}->setValue($form_state->getValue('sensitivity'));
      $settings->{'windows_sensitivity'}->setValue($form_state->getValue('windows_sensitivity'));
      $settings->{'zoom_sensitivity'}->setValue($form_state->getValue('zoom_sensitivity'));
      $settings->{'owner_settings'}->setValue($user->id());

      $settings->save();

      $user->{'setting'}->setValue($settings->id());

      $user->save();
    } else {
      $settings_user = $user->get('setting')->entity;

      $settings_user->{'dpi'}->setValue($form_state->getValue('dpi'));
      $settings_user->{'hz'}->setValue($form_state->getValue('hz'));
      $settings_user->{'mouse_acceleration'}->setValue($form_state->getValue('mouse_acceleration'));
      $settings_user->{'raw_input'}->setValue($form_state->getValue('raw_input'));
      $settings_user->{'sensitivity'}->setValue($form_state->getValue('sensitivity'));
      $settings_user->{'windows_sensitivity'}->setValue($form_state->getValue('windows_sensitivity'));
      $settings_user->{'zoom_sensitivity'}->setValue($form_state->getValue('zoom_sensitivity'));

      $settings_user->save();
    }

    $form_state->setRedirectUrl(Url::fromUri($base_url . '/player/' . $user->id()));
  }
}
