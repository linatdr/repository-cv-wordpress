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
  
  <h2>Formations</h2>
  <style> h2{color: green; 
  font-family:'font-family: 'system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
   } </style>
  <ul>
    <li>2009-2015 : Institut Notre dame-Agaves, Anderlecht, Obtention du C.E.B -Juin 2015</li>
    <li>2015-2021 : Collège St Augustin, Enghien, Obtention du C.E.1.D - Juin 2017, Obtention du C.E.S.S - Juin 2021</li>
    <li>2021-2022 : Essai à l'IHECS (FF)</li>
    <li>2022-2023 : Haute Ecole ISFSC, Schaerbeek - EMU BAC1</li>
    <li>2023-2024 : Haute Ecole ISFSC, Schaerbeek - EMU BAC2</li>
  </ul>
  <h2>Expériences Professionnelles (aucune)</h2>
  <ul>
    <li>Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles
      <ul>
        <li>Conception et développement d'interfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript.</li>
        <li>Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.</li>
        <li>Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.</li>
        <li>Utilisation de frameworks tels que React et Vue.js pour créer des expériences utilisateur dynamiques et réactives.</li>
        <li>Intégration de services RESTful et utilisation de Git pour le contrôle de version.</li>
      </ul>
    <li>Juin 2015 - Mars 2016 : Stagiaire en Développement Web, Startup WebCraft, Liège
      <ul>
        <li>Assistance dans la création d'une application web responsive utilisant les dernières technologies front-end.</li>
        <li>Participation à l'optimisation des performances du site et à l'assurance de sa compatibilité avec différents navigateurs.</li>
        <li>Contribution à la mise en place d'une méthodologie de développement Agile au sein de l'équipe.</li>
      </ul>
  </ul>
  

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
    ]);
  ?>
<?php if ($langueslist->have_posts()): ?>
  <h3>Langues</h3>
  <ul>
    <?php while ($langueslist->have_posts()): $langueslist->the_post(); ?>
      <li><?php the_title(); ?></li>
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
</body>

</html> 

<?php get_footer(); ?>