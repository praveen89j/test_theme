<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * mysubthemename theme.
 */
/**
 * Insert themed breadcrumb page navigation at top of the node content.
 */
function mysubthemename_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // comment below line to hide current page to breadcrumb
	$breadcrumb[] = drupal_get_title();
    $output .= '<nav class="breadcrumb">' . implode(' / ', $breadcrumb) . '</nav>';
    return $output;
  }
}
