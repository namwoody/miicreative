<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>



  <?php get_template_part('templates/home', 'page'); ?>
<?php endwhile; ?>
