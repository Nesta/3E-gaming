<?php

namespace Drupal\threeecsgo_general\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SettingsBlock' block.
 *
 * @Block(
 *  id = "settings_user_block",
 *  admin_label = @Translation("Button settings")
 * )
 */
class ButtonSettingsBlock extends BlockBase {

  public function build() {
    $current_path = \Drupal::service('path.current')->getPath();
    $user = \Drupal::currentUser();
    if ( $user->id() != 1 ) {
      if ($current_path == ("/player/" . $user->id())) {
        return [
          '#type' => 'markup',
          '#markup' => render($form = \Drupal::formBuilder()
            ->getForm(\Drupal\threeecsgo_general\Form\ButtonSettingsForm::class)),
        ];
      } else {
        return [
          '#type' => 'markup',
          '#markup' => '',
        ];
      }
    } else {
      return [
        '#type' => 'markup',
        '#markup' => '',
      ];
    }
  }

}
