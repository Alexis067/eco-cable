<footer>
    <div class="footer-wrapper wrapper">
        <div class="adresse">
            <?php while( have_rows('adresse', 'option') ): the_row(); ?>
                <p>Eco-câble SAS</p>
                <p><?php the_sub_field('adresse_ligne1'); ?></p>
                <p><?php the_sub_field('adresse_ligne2'); ?></p>
            <?php endwhile; ?>
        </div>
        <div class="tel-mail">
            <a href="tel:<?php get_field('num_telephone', 'option'); ?>"><?php the_field('num_telephone', 'option'); ?></a>
            <p><?php the_field('email', 'option'); ?></p>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
