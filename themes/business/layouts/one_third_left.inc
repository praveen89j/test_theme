<?php
/**
* Implements hook_panels_layouts()
*/
function business_one_third_left_panels_layouts() {
 
  $items['one_third_left'] = array(
    'title' => t('Custom Praveen layout'),
    'category' => t('Custom Praveen layout'),
    'icon' => 'one-third-left.png',
    'theme' => 'one-third-left',
    'css' => 'one-third-left.css',
    'regions' => array(
      'header' => t('Header'),
      'content' => t('Content'),
      'sidebar' => t('Sidebar'),
	  'footer' => t('Footer'),
    ),
  );
 
  return $items;
}