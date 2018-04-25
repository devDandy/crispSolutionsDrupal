<?php
  

function photo_blog_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'webform_client_form_40') {
    $form['actions']['submit']['#attributes']['class'][] = 'contact-form-btn';
    $form['#attributes']['class'][] = 'contact-form-container';
  } 
}

function photo_blog_preprocess_html(&$vars) {
$viewport = array(
  '#tag' => 'meta', 
  '#attributes' => array(
    'name' => 'viewport', 
    'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
  ),
);
}

