<?php

namespace Drupal\threeecsgo_search\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SearchBlock' block.
 *
 * @Block(
 *  id = "search_block",
 *  admin_label = @Translation("Search user form")
 * )
 */
class SearchBlock extends BlockBase {

  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => render($form = \Drupal::formBuilder()->getForm(\Drupal\threeecsgo_search\Form\SearchForm::class)),
    ];
  }

}
