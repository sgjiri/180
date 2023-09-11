
<?php get_header(); ?>
<section id="detailStagaire">
        <div class="maxWidth">
            <div class="contentStagaire">
                <figure>
                    <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="photo de stagiaire">
                </figure>
            </div>
            <div class="contentStagaire">
                <h2><?php the_title(); ?></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, omnis id, temporibus est culpa aliquam in veritatis obcaecati molestias nesciunt saepe vitae sequi odio distinctio dolore, labore maiores aliquid hic.</p>
                <div class="lienPortfo">
                    <p>Portfolio de stagaire</p>
                    <a href="<?php the_field('portfolio')?>">
                        <img src="<?php echo get_template_directory_uri() . '/asset/img/arrowLeft.png' ?>"alt="lien vers porfolio">
                    </a>
                </div>
                <div class="reseaux">
                    <a href="<?php the_field('git')?>" class="reseauxStagaire">
                        <img src="<?php echo get_template_directory_uri() . '/asset/img/git.png' ?>" alt="lien vers git">
                    </a>
                    <a href="<?php the_field('linkedin')?>" class="reseauxStagaire">
                        <img src="<?php echo get_template_directory_uri() . '/asset/img/linkedin.png' ?>" alt="lien vesrs linkedin">
                    </a>
                </div>
            </div>
            
            
        </div>
    </section>
<?php
get_footer();
?>