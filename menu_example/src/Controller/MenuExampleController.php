<?php

namespace Drupal\menu_example\Controller;

class MenuExampleController {
  public function basicInstructions() {
    return array(
      '#markup' => t('This is the base page of the Menu Example. There are a number of examples here, from the most basic (like this one) to extravagant mappings of loaded placeholder arguments. Enjoy! This page is displayed by the simplest (and base) menu example. Note that the title of the page is the same as the link title. You can also <a href="!link">visit a similar page with no menu link</a>. Also, note that there is a hook_menu_alter() example that has changed the path of one of the menu items.', array('!link' => url('examples/menu_example/path_only'))),
    );
  }
  
  public function alternateMenu() {
    return array(
      '#markup' => t('This will be in the Main menu instead of the default Tools menu'),
    );
  }
  
  public function permissioned() {
    return array(
      '#markup' => t('A menu item that requires the "access protected menu example" permission is at <a href="!link">examples/menu_example/permissioned/controlled</a>', array('!link' => url('examples/menu_example/permissioned/controlled'))),
    );
  }
  
  public function permissionedControlled() {
    return array(
      '#markup' => t('This menu entry will not show and the page will not be accessible without the "access protected menu example" permission.'),
    );
  }
  
  public function customAccess() {
    return array(
      '#markup' => t('A menu item that requires the user to posess a role of "authenticated user" is at <a href="!link">examples/menu_example/custom_access/page</a>', array('!link' => url('examples/menu_example/custom_access/page'))),
    );
  }
  
  public function menuPage() {
    return array(
      '#markup' => t('A menu item that requires the user to posess a role of "authenticated user" is at <a href="!link">examples/menu_example/custom_access/page</a>', array('!link' => url('examples/menu_example/custom_access/page'))),
    );
  }
  
  public function routeOnly() {
    return array(
      '#markup' => t('A route with no menu link is at <a href="!link">!link</a>', array('!link' => url('examples/menu_example/route_only/callback'))),
    );
  }
  
  public function routeOnlyRoute() {
    return array(
      '#markup' => t('The route entry has no corresponding menu_link entry, so it provides a route without a menu link, but it is the same in every other way to the simplest example.'),
    );
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