<?php
namespace Drupal\threeecsgo_general\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;

/**
 * Class EditRankForm.
 *
 * @package Drupal\threeecsgo_general\Form
 */
class EditRankForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'edit_rank_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $entityManager = \Drupal::service('entity_field.manager');
    $fields = $entityManager->getFieldStorageDefinitions('user');
    $options = options_allowed_values($fields['rank_player']);

    $form['rank_player'] = array(
      '#type' => 'select',
      '#description' => 'Select your new rank.',
      '#options' => $options,
    );

    $form['submit'] = [
      '#type'  => 'submit',
      '#value' => 'Update my rank',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $current_user = \Drupal::currentUser();
    $user = User::load($current_user->id());

    $user->{'rank_player'}->setValue($form['rank_player']['#value']);
    $user->save();
  }
}
