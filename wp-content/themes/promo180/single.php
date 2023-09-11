<?php
get_header(); // Inclut le fichier headerSingle.php
?>

<section id="detailArticle">
    <div class="maxWidth maxWidthArticle">
        <h2><?php the_title(); ?></h2>
        <div class="contenuArticle">
            <div class="contentArticle">
                <figure>
                    <img src="<?php the_post_thumbnail_url('thumbnail')?>" alt="image de l'article">
                </figure>
            </div>
            <div class="contentArticle">
                <article><?php the_excerpt(); ?></article>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>