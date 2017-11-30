<?php
namespace Drupal\threeecsgo_general\Controller;

use Drupal\Core\Controller\ControllerBase;

class InventoryController extends ControllerBase {

  public function inventoryBuild() {
    $form = $this->formBuilder()->getForm('Drupal\threeecsgo_general\Form\InventoryForm');

    return $form;
  }
}

?>
