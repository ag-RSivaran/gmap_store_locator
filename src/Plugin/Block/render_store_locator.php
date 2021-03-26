<?php

namespace Drupal\store_locator\Plugin\Block;


use Drupal\Core\Block\BlockBase;
use Drupal\store_locator\Controller\StoreLocatorPage;

/**
 * Provides a 'Store Locator render block' block.
 *
 * @Block(
 * id = "store_locator_renderblock",
 * admin_label = @Translation("Store Locator render block")
 * )
 */

class render_store_locator extends BlockBase {
/**
   * {@inheritdoc}
   */
  public function build() {

     $controller_variable = new StoreLocatorPage;
     $rendering_in_block = $controller_variable->page();
     return $rendering_in_block;

  }

}