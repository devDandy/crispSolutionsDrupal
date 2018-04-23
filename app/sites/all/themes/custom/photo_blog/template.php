<?php
  
function photo_blog_preprocess_page(&$variables){
  // NAMING IS EXTREMELY IMPORTANT FOR THEMING. 
	//PREPROCESS PAGE IS A LIFECYCLE
  $body_class = "full-width";
  $column_class = "";
  $page = $variables["page"];
  
  if(!empty($page["right_column"])){
    $column_class = "one-fourth";
    $body_class = "three-fourths";
  }

  if(!empty($page["left_column"])){
    $column_class = "one-fourth";
    $body_class = "three-fourths";
  }

  if(!empty($page["right_column"] && $page["left_column"])){
    $column_class = "one-fourth";
    $body_class = "half";
  }
  
  $variables["photo_blog"]["body_class"] = $body_class;
  $variables["photo_blog"]["column_class"] = $column_class;
  
}
