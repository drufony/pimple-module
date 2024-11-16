<?php

/**
 * @file
 * Pimple configuration hooks.
 */

/**
 * Implement hook_pimple_info().
 */
function pimple_pimple_info() {
  return [
    'default' => [
      'values' => [],
      'providers' => [],
    ],
  ];
}
