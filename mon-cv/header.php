<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets\css\app.css">
  <title><?php bloginfo('title'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>