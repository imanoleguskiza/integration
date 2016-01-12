<?php

/**
 * @file
 * Contains \Drupal\integration\Migrate\MigrateListJSON.
 */

namespace Drupal\integration\Migrate;


// @codingStandardsIgnoreStart

/**
 * Class MigrateListJSON.
 *
 * @package Drupal\integration\Migrate
 *
 * @todo: move this class under Backend namespace.
 */
class MigrateListJSON extends \MigrateListJSON {

  /**
   * {@inheritdoc}
   */
  protected function getIDsFromJSON(array $data) {
    $return = [];
    foreach ($data['results'] as $item) {
      $return[] = $item['id'];
    }
    return $return;
  }

}
// @codingStandardsIgnoreEnd
