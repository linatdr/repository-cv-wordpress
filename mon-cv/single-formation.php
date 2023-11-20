<?php get_header(); ?>

<?php while(have_posts()); the_post(); ?>
<h1><?php the _title(); ?></h1>
<article>
    <?php the_content(); ?>
</article>

    <?php previous_post_link('%link','formation: $title'); ?>
    <?php next_post_link('%link','formation: $title'); ?>
<?php endwhile; ?> 


<?php get_footer(), ?>