<?php
namespace Drupal\threeecsgo_general\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
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
    $form['dpi'] = [
      '#type'     => 'textfield',
      '#title'    => $this->t('DPI'),
      '#required' => TRUE,
    ];

    $form['sensitivity'] = [
      '#type'     => 'textfield',
      '#title'    => $this->t('Sensitivity'),
      '#required' => TRUE,
    ];

    $form['hz'] = [
      '#type'     => 'textfield',
      '#title'    => $this->t('HZ'),
      '#required' => TRUE,
    ];

    $form['zoom_sensitivity'] = [
      '#type'     => 'textfield',
      '#title'    => $this->t('Zoom Sensitivity'),
      '#required' => TRUE,
    ];

    $form['mouse_acceleration'] = [
      '#type'     => 'boolean',
      '#title'    => $this->t('Mouse Acceleration'),
      '#required' => TRUE,
    ];

    $form['windows_sensitivity'] = [
      '#type'     => 'textfield',
      '#title'    => $this->t('Windows Sensitivity'),
      '#required' => TRUE,
    ];

    $form['raw_input'] = [
      '#type'     => 'textfield',
      '#title'    => $this->t('Raw Input'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type'  => 'submit',
      '#value' => $this->t('Create'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $current_user = \Drupal::currentUser();
    $user = User::load($current_user->id());

    if ($user->settings == null) {
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

      $settings->save();

      $user->{'settings'}->setValue($settings->id());
    }
  }
}
