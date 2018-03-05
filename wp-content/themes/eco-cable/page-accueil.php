<?php get_header(); ?>

<main class="wrapper accueil">
    <?php
        while ( have_posts() ) : the_post();
        $titles = get_field('titles_group');
    ?>
        <div class="titles" style="<?php  ?>">
            <h1><?= $titles['title']; ?></h1>
            <h2><?= $titles['subtitle']; ?></h2>
        </div>
        <div class="content">
            <?php the_field('content'); ?>
        </div>
        <div class="content_bottom">
            <?php the_field('content_bottom'); ?>
        </div>
    <?php
        endwhile;
    ?>
</main>

<?php get_footer(); ?>