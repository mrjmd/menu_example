<?php

/**
* @file
* Contains \Drupal\menu_example\Routing\RouteSubscriber.
* See: https://drupal.org/node/2187643
*/
namespace Drupal\menu_example\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Drupal\Core\Routing\RoutingEvents;
use Symfony\Component\Routing\RouteCollection;

/**
* Listens to the dynamic route events.
*/
class RouteSubscriber extends RouteSubscriberBase {
  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Change path.
    $route = $collection->get('examples.menu_example.path_override');
    $route->setPath('/examples/menu_example/menu_altered_path');
    $route->setDefault('_title', 'Menu item altered by RouteSubscriber::alterRoutes');
  }
}
