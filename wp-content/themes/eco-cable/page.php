<?php get_header(); ?>

<main class="wrapper">
    <div class="content">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>