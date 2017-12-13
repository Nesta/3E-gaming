<?php

namespace Drupal\threeecsgo_general\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'EditInventoryDisplayBlock' block.
 *
 * @Block(
 *  id = "edit_inventory_display_block",
 *  admin_label = @Translation("Button edit inventory display")
 * )
 */
class ButtonEditInventoryDisplayBlock extends BlockBase {

  public function build() {
    $current_path = \Drupal::service('path.current')->getPath();
    $user = \Drupal::currentUser();
    if ( $user->id() != 1 ) {
      if ($current_path == ("/player/" . $user->id())) {
        return [
          '#type' => 'markup',
          '#markup' => render($form = \Drupal::formBuilder()
            ->getForm(\Drupal\threeecsgo_general\Form\ButtonEditInventoryDisplayForm::class)),
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
