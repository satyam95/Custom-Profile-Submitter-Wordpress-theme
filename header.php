<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
  </head>
  <body>
    <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
                  <div class="container box_1620">
                      <?php if(has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                      <?php else: ?>
                        <a class="navbar-brand" href="#">Profile Submitter</a>
                      <?php endif; ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <?php
                        wp_nav_menu(array(
                          'theme_location'  => 'primary',
                          'depth'           => 2,
                          'container'       => false,
                          'menu_class'      => 'nav navbar-nav navbar-right',
                          'fallback'        => 'wp_bootstrap_navwalker::fallback',
                          'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>
                  </div>
            	</nav>
            </div>
    </header>