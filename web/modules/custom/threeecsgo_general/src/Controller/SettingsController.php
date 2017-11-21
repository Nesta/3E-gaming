<?php
namespace Drupal\threeecsgo_general\Controller;

use Drupal\Core\Controller\ControllerBase;

class SettingsController extends ControllerBase {

  public function settingsBuild() {
    $form = $this->formBuilder()->getForm('Drupal\threeecsgo_general\Form\SettingsForm');

    return $form;
  }
}

?>
