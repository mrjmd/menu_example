<?php

namespace Drupal\menu_example\Controller;

class MenuExampleController {
  public function basicInstructions() {
    return array(
      '#markup' => t('This page is displayed by the simplest (and base) menu example. Note that the title of the page is the same as the link title. You can also <a href="!link">visit a similar page with no menu link</a>. Also, note that there is a hook_menu_alter() example that has changed the path of one of the menu items.', array('!link' => url('examples/menu_example/path_only'))),
    );
  }
}