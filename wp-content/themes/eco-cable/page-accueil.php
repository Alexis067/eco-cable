<?php get_header(); ?>

<main class="wrapper accueil">
    <?php
        while ( have_posts() ) : the_post();
        $titles = get_field('titles_group');
        $bg_img = get_field('background_title');
    ?>
        <div class="titles" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url(<?php echo $bg_img['url']; ?>);">
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