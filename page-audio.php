<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cityband
 */

//get_header();
$img_id=carbon_get_theme_option('team_img');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <p><?= carbon_get_theme_option( 'test_text' );?></p>
            <p><?=carbon_get_theme_option('team_img'); ?></p>

            <p><?php
                $audios = carbon_get_theme_option('audios');
                foreach ($audios as $audio){
                    echo '<p>'.$audio['name-song'].'</p>';
                    echo "<audio src='". wp_get_attachment_url ($audio['file-song'])."' controls></audio>";
                }

                ?></p>

            <img src="<?= wp_get_attachment_image_url($img_id, 'full');?>" alt="">

            <!--		--><?php
            //		if ( have_posts() ) :
            //
            //			if ( is_home() && ! is_front_page() ) :
            //				?>
            <!--				<header>-->
            <!--					<h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--</h1>-->
            <!--				</header>-->
            <!--				--><?php
            //			endif;
            //
            //			/* Start the Loop */
            //			while ( have_posts() ) :
            //				the_post();
            //
            //				/*
            //				 * Include the Post-Type-specific template for the content.
            //				 * If you want to override this in a child theme, then include a file
            //				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            //				 */
            //				get_template_part( 'template-parts/content', get_post_type() );
            //
            //			endwhile;
            //
            //			the_posts_navigation();
            //
            //		else :
            //
            //			get_template_part( 'template-parts/content', 'none' );
            //
            //		endif;
            //		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();
