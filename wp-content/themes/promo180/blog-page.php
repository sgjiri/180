<?php
get_header();
?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const categorySpans = document.querySelectorAll(".category-filter");

    categorySpans.forEach(function (span) {
        span.addEventListener("click", function () {
            const selectedCategory = span.textContent;

            const allArticles = document.querySelectorAll(".oneArticle");
            allArticles.forEach(function (article) {
                article.style.display = "none";
            });

            const matchingArticles = document.querySelectorAll(`[data-categories*="${selectedCategory}"]`);
            matchingArticles.forEach(function (article) {
                article.style.display = "block";
            });
        });
    });
});

</script>

<section id="articles">
    <div class="maxWidth">
        <div class="contentSectionArticles">
            <h2>Articles de stagiaires</h2>
            <h3>Categories</h3>
            <div class="langages">
                <span class="category-filter">HTML</span>
                <span class="category-filter">CSS</span>
                <span class="category-filter">PHP</span>
                <span class="category-filter">JS</span>
                <span class="category-filter">Twig</span>
            </div>
        </div>
        <div class="contentSectionArticles">
            <?php
            $args = array(
                'post_type' => 'post', // Spécifiez le type de publication "Article"
                'posts_per_page' => -1, // Pour obtenir tous les articles
            );

            $standard_articles = new WP_Query($args);

            // Vérifiez si des articles ont été trouvés
            if ($standard_articles->have_posts()) :
                while ($standard_articles->have_posts()) :
                    $standard_articles->the_post();
                    $categories = get_the_category(); // Récupérez les catégories de l'article

                    // Ajoutez une classe data-category à chaque article avec les catégories correspondantes
                    $categoryClasses = array_map(function ($category) {
                        return 'category-' . $category->slug;
                    }, $categories);
                    
                    $categoryClass = implode(' ', $categoryClasses);
                    ?>
                    <a class="oneArticle <?php echo esc_attr($categoryClass); ?>" href="<?php the_permalink(); ?>" data-categories="<?php
                        $categoryNames = array_map(function ($category) {
                            return $category->name;
                        }, $categories);
                        echo esc_attr(implode(',', $categoryNames));
                    ?>">
                        <figure>
                            <img src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="imageArticle">
                        </figure>
                        <div class="resume">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                    <?php
                endwhile;
            else :
                echo "<p>Pas d'article</p>";
            endif;

            // Réinitialisez les données des articles
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
