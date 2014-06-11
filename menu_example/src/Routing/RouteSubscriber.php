<?php
/**
* @file
* Contains \Drupal\menu_example\Routing\RouteSubscriber.
* See: https://drupal.org/node/2187643
*/
namespace Drupal\menu_example\Routing;
use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;
/**
* Listens to the dynamic route events.
*/
class RouteSubscriber extends RouteSubscriberBase {
  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection, $provider) {
    // We only respond when routes of the menu example module can be altered.
    if ($provider == 'menu_example') {
      // Change path.
      $route = $collection->get('examples.menu_example.path_override');
      $route->setPath('/examples/menu_example/menu_altered_path');
    }
  }
}