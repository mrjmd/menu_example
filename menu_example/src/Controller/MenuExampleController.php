<?php

namespace Drupal\menu_example\Controller;

class MenuExampleController {
  public function basicInstructions($content = '', $link = '') {
    $markup = '<div>'. t('This is the base page of the Menu Example. There are a number of examples here, from the most basic (like this one) to extravagant mappings of loaded placeholder arguments. Enjoy!') .'</div>';
    if ($content && $link) {
      $markup .= '<br /><div>'. t($content, array('!link' => url($link))) .'</div>';
    }
    return array(
      '#markup' => $markup,
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
      '#markup' => t('A menu item that requires the user to posess a role of "authenticated" is at <a href="!link">examples/menu_example/custom_access/page</a>', array('!link' => url('examples/menu_example/custom_access/page'))),
    );
  }
  
  public function customAccessPage() {
    return array(
      '#markup' => t('This menu entry will not be visible and access will result in a 403 error unless the user has the "authenticated" role. This is accomplished with a custom access callback.'),
    );
  }
  
  public function routeOnly() {
    return array(
      '#markup' => t('A route with no menu link is at <a href="!link">!link</a>', array('!link' => url('examples/menu_example/route_only/route'))),
    );
  }
  
  public function routeOnlyRoute() {
    return array(
      '#markup' => t('The route entry has no corresponding menu_link entry, so it provides a route without a menu link, but it is the same in every other way to the simplest example.'),
    );
  }
  
  public function urlArgs($arg1 = '', $arg2 = '') {
    $markup = t('This page demonstrates using arguments in the path (portions of the path after "menu_example/use_url_arguments". For example, access it with <a href="!link1">!link1</a> or <a href="!link2">!link2</a>).', array('!link1' => url('examples/menu_example/use_url_arguments/one/two'), '!link2' => url('examples/menu_example/use_url_arguments/firstarg/secondarg')));
    if (!empty($arg1)) {
      $markup .= '<div>' . t('Argument 1=%arg', array('%arg' => $arg1)) . '</div>';
    }
    if (!empty($arg2)) {
      $markup .= '<div>' . t('Argument 2=%arg', array('%arg' => $arg2)) . '</div>';
    }
    return array(
      '#markup' => $markup,
    );
  }

  public function titleCallbacks() {
    return array(
      '#markup' => t('The page title is dynamically changed by the title callback'),
    );
  }
  
  public function tabsPage($path = '', $title = '') {
    $secondary = count(explode('/', $path)) > 2 ? 'secondary ' : '';
    return array(
      '#markup' => t('This is the @secondary tab "@tabname" in the "basic tabs" example.', array('@secondary' => $secondary, '@tabname' => $title)),
    );
  }

  public function placeholderArgs() {
    return array(
      '#markup' => t('Demonstrate placeholders by visiting <a href="!link">examples/menu_example/placeholder_argument/3343/display</a>', array('!link' => url('examples/menu_example/placeholder_argument/3343/display'))),
    );
  }

  public function placeholderArgsDisplay($arg = '') {
    return array(
      '#markup' => $arg,
    );
  }
  
  public function upcastExample($upcast) {
    return array(
      '#markup' => t('Placeholder for now: '. $upcast),
    );
  }
  
  public function pathOverride() {
    return array(
      '#markup' => t('This menu item was created strictly to allow the RouteSubscriber class to have something to operate on. menu_example.routing.yml defined the path as examples/menu_example/menu_original_path. The alterRoutes() changes it to examples/menu_example/menu_altered_path. You can try navigating to both paths and see what happens!'),
    );
  }
  
  public function customTitle($title = '') {
    global $user;
    $title .= $user->name;
    return $title;
  }
}