<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo ('title'); ?></title>
  <?php wp_head(); ?>
  <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets\css\app.css">
</head>
<body <?php body_class (); ?>>