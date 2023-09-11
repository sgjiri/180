</main>
<footer>
    <div><?php dynamic_sidebar('footer1')?></div>
    <div class="maxWidth">
        <div class="footerContent">
            <div class="logo">
                <p class="scroll">codemorning</p>
            </div>
        </div>
        <div class="footerContent">
            <h3>Menu</h3>
            <a href="">Accuile</a>
            <a href="">Blog</a>
            <a href="">Stagaires</a>
        </div>
        <div class="footerContent">
            <a href="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/fb.png' ?>" alt="icone facebook">
            </a>
            <a href="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/insta.png' ?>" alt="icone instagrame">
            </a>
            <a href="">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/twiter.png' ?>" alt="icon twiter">
            </a>
        </div>


    </div>

</footer>

<?php wp_footer()  ?>

</body>

</html>