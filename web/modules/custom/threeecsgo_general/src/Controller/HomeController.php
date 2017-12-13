<?php
namespace Drupal\threeecsgo_general\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends ControllerBase {

  public function homeBuild() {
    $user = \Drupal::currentUser();
    if ($user->id() != null and $user->id() != 1) {
      $response = new RedirectResponse('/player/' . $user->id());
      $response->send();
    } else {
      $response = new RedirectResponse('/welcome');
      $response->send();
    }
    return;
  }
}
