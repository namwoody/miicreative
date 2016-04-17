<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>



  <?php get_template_part('templates/contact', 'page'); ?>
<?php endwhile; ?>
