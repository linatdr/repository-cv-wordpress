<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae</title>
  <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
  <h1>Curriculum Vitae</h1>
<style> h1 {color: green;
 font-family:'font-family:'system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;';
} 
</style>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/zorosimp.jpg" alt="zorosimp" width="300"> 
  <h2>Informations Personnelles</h2>
  <ul>
    <li> Nom : Tordeur</li>
    <li> Prénom : Lina</li>
    <li> Date de Naissance : 25 février 2003 (20 ans)</li>
    <li> Adressse: Rue des Six Censes, Tubize</li>
    <li> Téléphone : 0497 72 33 98 </a></li>
    <li> <a href="mailto:lina.tordeur@isfsc.be">lina.tordeur@isfsc.be</a> </li>
  </ul>
  
<?php 
$formationlist = new WP_Query( [
  'post_type' => 'formation',
  'posts_per_page' => -1
]);
?>
<? if ($formationlist->have_posts()): ?>
  <h3>Formations</h3>
  <ul> 
    <?php 
    while ($formationlist->have_posts()): $formationlist->the_post();
?>
<li>
<?php the_title(); ?> - <a href=" <?php the_permalink(); ?>" >voir</a>
</li>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  </ul>
<?php endif; ?>

  <?php
    $skillslist = new WP_Query([
        'post_type' => 'skills',
    ]);
  ?>
<?php if ($skillslist->have_posts()): ?>
  <h3>Compétences</h3>
  <ul>
    <?php while ($skillslist->have_posts()): $skillslist->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>


<?php
    $langueslist = new WP_Query([
        'post_type' => 'langues',
        'posts_per_page' => -1
        
    ]);
  ?>
<?php if ($langueslist->have_posts()): ?>
  <h3>Langues</h3>
  <ul>
    <?php while ($langueslist->have_posts()): $langueslist->the_post(); ?>
      <li><?php the_title(); ?> - <a href=" <?php the_permalink(); ?>" >voir</a>
    </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>


<?php
    $Centres_i = new WP_Query([
        'post_type' => 'Centres_i',
    ]);
  ?>
<?php if ($Centres_i->have_posts()): ?>
  <h3>Centres d'Intérêt</h3>
  <ul>
    <?php while ($Centres_i->have_posts()): $Centres_i->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>


<?php
    $XP = new WP_Query([
        'post_type' => 'XP',
    ]);
  ?>
<?php if ($XP->have_posts()): ?>
  <h3>Expériences Professionnelles</h3>
  <ul>
    <?php while ($XP->have_posts()): $XP->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>