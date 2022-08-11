<?php

/**
 * 
 * Header Template
 * @package Aquila
 * 
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquila</title>
    <?php wp_head(); ?> <!-- Includes default WP scripts -->
</head>
<body <?php body_class(); ?> > <!-- Add body classes to each page -->
<?php
if(function_exists('wp_body_open')){ /** For backward compatibility - make sure the function exists */
 wp_body_open();
}
?>
<header>Header</header>