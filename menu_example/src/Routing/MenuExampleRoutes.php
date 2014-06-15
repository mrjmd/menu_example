<?php

/**
* @file
* Contains \Drupal\menu_example\Routing\MenuExampleRoutes.
*/
namespace Drupal\menu_example\Routing;

use Symfony\Component\Routing\Route;
/**
* Defines dynamic routes for our tabs menu items.
*/
class MenuExampleRoutes {
  /**
   * Returns an array of route objects.
   *
   * @return \Symfony\Component\Routing\Route[]
   *   An array of route objects.
   */
  public function routes() {
    $routes = array();

    $tabs = array(
      'tabs' => t('Default primary tab'),
      'tabs/second' => t('Second'),
      'tabs/third' => t('Third'),
      'tabs/fourth' => t('Fourth'),
      'tabs/default/second' => t('Second'),
      'tabs/default/third' => t('Third'),
    );

    foreach ($tabs AS $path => $title) {
      $machine_name = 'examples.menu_example.'. str_replace('/', '_', $path);
      $routes[$machine_name] = new Route(
        '/examples/menu_example/' . $path,
        array(
          '_content' => 'Drupal\menu_example\Controller\MenuExampleController::tabsPage',
          '_title' => $title,
          'path' => $path,
          'title' => $title,
        ),
        array(
          '_access' => 'TRUE',
        )
      );
    }

    return $routes;
  }
}
