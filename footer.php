<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cityband
 */

?>

	</div><!-- #content -->

    <footer class="sect-five wow">
        <div class="container p-0">
            <div class="row text-center justify-content-center title-7">
                <div class="col-lg-12 col-sm-12 p-0">
                    <p class="Follow-us-and-ask-fo w">Следите за нами в соц.сетях:</p>
                </div>
            </div>
            <div class="row justify-content-center text-center title-footer">
                <div class="col-lg-1 col-sm-1">
                    <img src="<?= get_template_directory_uri()?>/assets/images/Google+.png" alt="">
                </div>
                <div class="col-lg-1 col-sm-1">
                    <img src="<?= get_template_directory_uri()?>/assets/images/Facebook.png" alt="">
                </div>
                <div class="col-lg-1 col-sm-1">
                    <img src="<?= get_template_directory_uri()?>/assets/images/Twitter.png" alt="">
                </div>
                <div class="col-lg-1 col-sm-1">
                    <img src="<?= get_template_directory_uri()?>/assets/images/Instagram.png" alt="">
                </div>
                <div class="col-lg-1 col-sm-1">
                    <img src="<?= get_template_directory_uri()?>/assets/images/Behance.png" alt="">
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
