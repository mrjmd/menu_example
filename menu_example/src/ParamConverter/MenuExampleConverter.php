<?php

/**
 * @file
 * Contains \Drupal\menu_example\ParamConverter\MenuExampleConverter.
 */

namespace Drupal\menu_example\ParamConverter;

use Drupal\Core\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;

/**
 * Custom upcasting example
 */
class MenuExampleConverter implements ParamConverterInterface {

  /**
   * {@inheritdoc}
   */
  public function convert($value, $definition, $name, array $defaults, Request $request) {
    return $value . '_testing_upcasting';
  }

  /**
   * {@inheritdoc}
   */
  public function applies($definition, $name, Route $route) {
    return TRUE;
  }

}
