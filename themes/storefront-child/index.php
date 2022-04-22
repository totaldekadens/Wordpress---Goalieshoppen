<?php 

get_header();

?>

<main class="flex column">

<?php 

while (have_posts()) {
    the_post();

    the_post_thumbnail();
 
    the_title();

    the_content();

 } ?>

</main>

<?php get_footer(); ?>

