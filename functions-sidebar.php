<?php

register_sidebar(array(
  'name' => __( 'MainSidebar' ),
  'id' => 'mainsidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '',
  'after_title' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>'  
));
