<?php

namespace Drupal\threeecsgo_search\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SearchGroupBlock' block.
 *
 * @Block(
 *  id = "search_group_block",
 *  admin_label = @Translation("Search group form")
 * )
 */
class SearchGroupBlock extends BlockBase {

  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => render($form = \Drupal::formBuilder()->getForm(\Drupal\threeecsgo_search\Form\SearchGroupForm::class)),
    ];
  }

}
