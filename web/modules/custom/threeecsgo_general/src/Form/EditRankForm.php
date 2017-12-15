<?php
namespace Drupal\threeecsgo_general\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
    $current_path = \Drupal::service('path.current')->getPath();
    $current_user = \Drupal::currentUser();

    $form['container'] = [
      '#type'       => 'container',
      '#attributes' => ['id' => 'edit-rank'],
    ];

    if ($current_path == ("/player/" . $current_user->id())) {
      $user = User::load($current_user->id());
      $form['container']['rank'] = [
        '#type' => 'markup',
        '#markup' => render($user->get('rank_player')->value),
      ];

      $form['rank_player'] = array(
        '#type' => 'select',
        '#description' => 'Select your current rank.',
        '#options' => $options,
        '#default_value' => $user->get('rank_player')->value,
        '#ajax' => [
          'callback' => '::submitForm',
          'event' => 'change',
          'wrapper' => 'edit-rank',
        ],
      );
    } else {
      $user = User::load(str_replace('/player/', '', $current_path));
      $form['container']['rank'] = [
        '#type' => 'markup',
        '#markup' => render($user->get('rank_player')->value),
      ];
    }

    // Disable caching on this form.
    $form_state->setCached(FALSE);

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

    $form['container']['rank'] = [
      '#type' => 'markup',
      '#markup' => render($user->get('rank_player')->value),
    ];

    $form_state->setRebuild();

    return $form['container'];
  }
}
