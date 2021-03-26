<?php

namespace Drupal\store_locator\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for Store Locator.
 */
class StoreLocatorPage extends ControllerBase {

  /**
   * Render a list and Map.
   */
  public function page() {
    $content = [];
    $content['searchitem'] = [
      '#type' => 'textfield',
      '#prefix' => '<div class="myclass"><p class="gmap_fndstr_spn">FIND A STORE</p><p class="gmap_map_spn">MAP</p></div>',
      '#attributes' => [
        'id' => ['search-location'],
        'placeholder' => $this->t('Enter the Pincode'),
        'class' => ['strlct-src-icon']
      ],
    ];
    // Preprocesses the Results.
    return [
      '#theme' => 'location_data',
      '#location_search' => $content,
    ];
  }

}
