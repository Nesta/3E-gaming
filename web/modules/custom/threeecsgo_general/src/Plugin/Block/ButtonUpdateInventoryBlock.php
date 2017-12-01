<?php

namespace Drupal\threeecsgo_general\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'UpdateInventoryBlock' block.
 *
 * @Block(
 *  id = "update_inventory_block",
 *  admin_label = @Translation("Button update inventory")
 * )
 */
class ButtonUpdateInventoryBlock extends BlockBase {

  public function build() {
    $current_path = \Drupal::service('path.current')->getPath();
    $user = \Drupal::currentUser();
    if ( $user->id() != 1 ) {
      if ($current_path == ("/inventory/" . $user->id())) {
        return [
          '#type' => 'markup',
          '#markup' => render($form = \Drupal::formBuilder()
            ->getForm(\Drupal\threeecsgo_general\Form\ButtonUpdateInventoryForm::class)),
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
