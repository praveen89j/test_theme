<?php

$plugin = array(
  'title' => t('Newest Nodes'),
  'description' => t('Display a list of the newest nodes'),
  'single' => TRUE,
  'render callback' => 'newest_nodes_content_type_render',
  'defaults' => array(),
  'edit form' => 'newest_nodes_edit_form',
  'category' => array(t('My Module')),
);

/**
* Content type settings form.
*/
function newest_nodes_edit_form($form, &$form_state) {
 
  $conf = $form_state['conf'];
 
  $form['number'] = array(
    '#type' => 'select',
    '#title' => t('Select the number of node to display'),
    '#options' => array(5 => t('Five'), 10 => t('Ten'), 15 => t('Fifteen')),
    '#required' => TRUE,
    '#default_value' => isset($conf['number']) ? $conf['number'] : '',
  );
 
  $form['link'] = array(
    '#type' => 'checkbox',
    '#title' => t('Link title to node'),
    '#default_value' => isset($conf['link']) ? $conf['link'] : '',
  );
 
  return $form;
}
 
/**
* Content type submit handler.
*/
function newest_nodes_edit_form_submit($form, &$form_state) {
  foreach (array('number', 'link') as $key) {
    $form_state['conf'][$key] = $form_state['values'][$key];
  }
}

function newest_nodes_content_type_render($subtype, $conf, $args, $context) {
 
  $results = db_select('node', 'n')
    ->fields('n', array('nid', 'title', 'type'))
    ->condition('status', 1)
    ->range(0, $conf['number'])
    ->execute()
    ->fetchAll();
 
  $items = array();
 
  foreach ($results as $result) {
    if (isset($conf['link'])) {
      $items[] = l($result->title, 'node/' . $result->nid).' type is '.$result->type;
    }
    else {
      $items[] = $result->title.' type is '.$result->type;
    }
  }
 
  $block = new stdClass();
  $block->title = t('Newest Nodes');
  $block->content = theme('item_list', array('items' => $items));
 
  return $block;
}
