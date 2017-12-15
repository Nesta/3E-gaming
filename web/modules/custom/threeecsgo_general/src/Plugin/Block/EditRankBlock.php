<?php

namespace Drupal\threeecsgo_general\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'EditRankBlock' block.
 *
 * @Block(
 *  id = "edit_rank_block",
 *  admin_label = @Translation("Edit rank form")
 * )
 */
class EditRankBlock extends BlockBase {

  public function build() {
    $user = \Drupal::currentUser();
    if ( $user->id() != 1 ) {
      return [
        '#type' => 'markup',
        '#markup' => render($form = \Drupal::formBuilder()
          ->getForm(\Drupal\threeecsgo_general\Form\EditRankForm::class)),
      ];
    } else {
      return [
        '#type' => 'markup',
        '#markup' => '',
      ];
    }
  }

}
