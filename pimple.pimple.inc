<?php

/**
 * Implement hook_pimple_info().
 */
function pimple_pimple_info() {
  return array(
    'default' => array(
      'class' => 'Pimple\\Container',
    ),
  );
}
