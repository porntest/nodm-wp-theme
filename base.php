<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php if (is_page('Home')) : ?>
    <div class="display-case-bg">
        <div class="container display-case">
            <div class="row">
                <div class="col-sm-8 left">
                    <p class="lead">Tag line text goes here.</p>
                </div>
                <div class="col-sm-4 text-center right">
                    <?php dynamic_sidebar('display-case'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
