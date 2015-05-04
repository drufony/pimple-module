<?php
/**
 * @file
 * API documentation for the Pimple module.
 */

/**
 * hook_pimple_info() returns an array of containers and the
 * constructor arguments and method calls required to configure
 * the container.
 *
 * Use `values` to pass default values to the container.
 *
 * Use `providers` to attach service providers as in the example.
 *
 * @return array
 */
function hook_pimple_info() {
  $info = array();
  $info['my_container'] = array(
    'class' => 'Pimple\\Container',
    'values' => array(
      'name' => 'pimple'
    ),
    'providers' => array(
      array(
        'class' => 'Pimple\\Tests\\Fixtures\\PimpleServiceProvider',
        'values' => array(
          'pimple' => 'pimple2'
        ),
      ),
    ),
  );
  return $info;
}

/**
 * hook_pimple_info_alter() allows other modules to modify
 * the configuration of the container.
 *
 * @param $info
 */
function hook_pimple_info_alter(&$info) {
  $info['my_container']['class'] = 'Silex\\Application';
}
