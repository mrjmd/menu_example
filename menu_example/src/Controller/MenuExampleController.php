<?php

namespace Drupal\menu_example\Controller;

use Symfony\Component\HttpFoundation\Request;

class MenuExampleController {
  public function basicInstructions(Request $request) {
    /*return array(
      '#markup' => t('This is the base page of the Menu Example. There are a number of examples here, from the most basic (like this one) to extravagant mappings of loaded placeholder arguments. Enjoy! This page is displayed by the simplest (and base) menu example. Note that the title of the page is the same as the link title. You can also <a href="!link">visit a similar page with no menu link</a>. Also, note that there is a hook_menu_alter() example that has changed the path of one of the menu items.', array('!link' => url('examples/menu_example/path_only'))),
    );*/
    return array('#markup' => $request);
  }
  
  public function menuPage() {
    return array(
      '#markup' => t('A menu item that requires the user to posess a role of "authenticated user" is at <a href="!link">examples/menu_example/custom_access/page</a>', array('!link' => url('examples/menu_example/custom_access/page'))),
    );
  }
  
  public function customTitle(Request $request) {
    return $request;
  }
}