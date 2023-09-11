<?php
get_header();
?>
<section id="stagiaires">
    <div class="slider-container">
        <div class="slider">
            <?php
            $args = array(
                'post_type' => 'stagiaire', // Récupère seulement les stagiaires
                'posts_per_page' => -1, // Récupère tous les stagiaires
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) : $query->the_post();
            ?>
                <a class="slider-item" id="slide" href="<?php the_permalink() ?>">
                    <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="">
                </a>
            <?php
                endwhile;
            } else {
                echo "<p>Pas de stagiaire </p>";
            }

            wp_reset_postdata(); // Réinitialise la requête
            ?>
        </div>
        <div class="fleche">
            <span class="flechClick">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/arrowRight.png' ?> "alt="flecheGauche">
            </span>
            <span class="flechClick">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/arrowLeft.png' ?>" alt="flecheDroite">
            </span>
        </div>
    </div>
</section>


<?php
get_footer();
?>

