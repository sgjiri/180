<?php
get_header(); // Inclut le fichier headerSingle.php
?>
<section id="hero">
            <div id="groupePhoto">
                <div id="groupePhotoDegrade">
                    <div id="textHero">
                        <h1>codemorning</h1>
                        <h2>Combatre la chaleure
                            par tiranie de reveille</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur veniam saepe esse nulla
                            corporis ipsam voluptatibus, quidem obcaecati id voluptate dignissimos sed ea expedita
                            reiciendis cum velit facere corrupti voluptatum.</p>
                    </div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>
</section>
<section id="white"></section>
<section id="values">
            <div class="maxWidth">
                <H2>Que-ce que CODEMORNING</H2>
                <div class="contentValue">
                    <div class="oneValue">
                        <figure id="homme">
                            <img src="<?php echo get_template_directory_uri() . '/asset/img/homme.png' ?>" alt="fatigue">
                        </figure>
                        <div class="textOneValue">
                            <h3>Reputation</h3>
                            <p>Inventé par une stagiaire cinglée, ce concept d'éducation a eu un impact terrible sur
                                notre motivation.</p>
                        </div>
                    </div>
                    <div class="oneValue">
                        <figure id="vertigineux">
                            <img src="<?php echo get_template_directory_uri() . '/asset/img/vertigineux.png' ?>" alt="vertigineux">
                        </figure>
                        <div class="textOneValue">
                            <h3>Impact durable</h3>
                            <p>Ce concept a comme conséquence un endommagement irréversible sur le cerveau.</p>
                        </div>
                    </div>
                    <div class="oneValue">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() . '/asset/img/burnout.png' ?>" alt="burnout">
                        </figure>
                        <div class="textOneValue">
                            <h3>Fatigue constante</h3>
                            <p>Vous êtes totalement épuisé en début d'après-midi.</p>
                        </div>
                    </div>
                    <div class="oneValue">
                        <figure>
                            <img src="<?php echo get_template_directory_uri() . '/asset/img/fatigue.png'?>" alt="fatigue">
                        </figure>
                        <div class="textOneValue">
                            <h3>Tête de zombie</h3>
                            <p>Votre apparence ressemble à celle d'un mort-vivant tout au long de la journée."</p>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section id="articles">
            <div class="maxWidth">
                <div class="contentSectionArticles">
                    <h2>Dernieres Articles</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, ea. Libero impedit maiores
                        fuga culpa voluptatem repudiandae, velit alias ullam corporis quos. Qui nisi modi neque
                        exercitationem molestias! Rem, beatae.</p>
                </div>
                <div class="contentSectionArticles">
                <?php
                    if(have_posts()){

                        while(have_posts()) : the_post();
                ?>
                    <a class="oneArticle" href="<?php the_permalink(); ?>">
                        <figure>
                            <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt='imageArticle'>
                        </figure>
                        <div class="resume">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                    <?php
                        endwhile;
                            }else{
                            echo "<p>Pas d'article </p>";
                         }
                        ?>
             
            </div>
            </div>
</section>
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