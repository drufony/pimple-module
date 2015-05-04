<?php

/**
 * @file
 * Pimple configuration hooks.
 */

/**
 * Implement hook_pimple_info().
 */
function pimple_pimple_info() {
  return array(
    'default' => array(
      'values' => array(),
      'providers' => array(),
    ),
  );
}
