<?php

/**
 * @file
 * Contains \Drupal\integration\Migrate\MigrateItemJSON.
 */

namespace Drupal\integration\Migrate;

use Drupal\integration\Document\Document;

/**
 * Class MigrateItemJSON.
 *
 * @package Drupal\integration\Migrate
 */
class MigrateItemJSON extends \MigrateItemJSON {

  /**
   * {@inheritdoc}
   */
  public function getItem($id) {
    $current_item = parent::getItem($id);
    $document = new Document($current_item);
    return new DocumentWrapper($document);
  }

}
