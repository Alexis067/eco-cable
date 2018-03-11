<?php get_header(); ?>

<main class="wrapper notre-activite">
    <?php
        while ( have_posts() ) : the_post();
        $achat_bg_img = get_field('achat_bg_title');
        $transfo_bg_img = get_field('transfo_bg_title');
        $vente_bg_img = get_field('vente_bg_title');
    ?>
    <!-- ACHAT -->
    <section>
        <div class="titles" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url(<?php echo $achat_bg_img['url']; ?>);">
            <h1><?php the_field('achat_title') ?></h1>
        </div>
        <div class="content">
            <?php the_field('achat_content'); ?>
        </div>
    </section>
    <!-- TRANSFORMATION -->
    <section>
        <div class="titles" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url(<?php echo $transfo_bg_img['url']; ?>);">
            <h1><?php the_field('transfo_title') ?></h1>
        </div>
        <div class="content">
            <?php the_field('content_1'); ?>
        </div>
        <div class="process">
            <?php if( have_rows('images_traitement') ): while ( have_rows('images_traitement') ) : the_row(); ?>
                <div class="process-item">
                    <?= wp_get_attachment_image(get_sub_field('image')); ?>
                    <p class="img_subtitle"><?php the_sub_field('img_subtitle'); ?></p>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="content">
            <?php the_field('content_2'); ?>
        </div>
    </section>
    <!-- VENTE -->
    <section>
        <div class="titles" style="background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url(<?php echo $vente_bg_img['url']; ?>);">
            <h1><?php the_field('vente_title') ?></h1>
        </div>
        <div class="content">
            <?php the_field('vente_content'); ?>
        </div>
    </section>
    <?php
        endwhile;
    ?>
</main>

<?php get_footer(); ?>