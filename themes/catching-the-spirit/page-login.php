<?php
$args = array(
    'redirect' => home_url(), 
    'id_username' => 'user',
    'id_password' => 'pass',
   ) 
;?>

<?php wp_login_form( $args ); ?>