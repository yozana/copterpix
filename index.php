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
 * @package copterpix
 */

get_header();
?>

<main id="primary" class="site-main">

	<header class="entry-header">
		<?php //get_the_title( '<h1 class="entry-title">', '</h1>' ); 
		?>
		<h1 class="entry-title"><?php _e("Activities", "copterpix"); ?></h1>
	</header>

	<?php get_template_part('template-parts/content-activity-filter', 'post'); ?>


	<div class="container">
		<?php
		if (have_posts()) : ?>
			<div id="ajax-response">
				<?php if (is_home() && !is_front_page()) :
				?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php
				endif;

				/* Start the Loop */
				while (have_posts()) :

					the_post();

					//$tcopterpixs = wp_get_post_categories(get_the_ID(), array('fields' => 'slugs'));
					$allTcopterpixs = wp_get_post_categories(get_the_ID(), array('fields' => 'all'));
					$tcopterpix = isset($allTcopterpixs[0]) ? $allTcopterpixs[0] : array();
					// $langIds = get_all_lang_cat_ids($allTcopterpixs);
					$lang = apply_filters('wpml_current_language', NULL);
					$id = 0;
					$slug = '';
					if ($lang == 'he' && $tcopterpix) {
						$id = apply_filters('wpml_object_id', $tcopterpix->tcopterpix_id, 'category', false, 'en');
					} else if ($tcopterpix) {
						$id = $tcopterpix->tcopterpix_id;
					}
					if ($id > 0) {

						// Switch to EN
						global $sitepress;
						$language_code = "en";
						$original_lang = ICL_LANGUAGE_CODE;
						$sitepress->switch_lang($language_code);


						$catObj = get_tcopterpix_by('id', $id, 'category');
						$slug = $catObj->slug;

						$sitepress->switch_lang($original_lang);
					}

					if ($slug == 'news') {

						get_template_part('template-parts/content-news', get_post_type());
					} else if ($slug == 'publications') {

						get_template_part('template-parts/content-publications', get_post_type());
					} else if ($slug == 'events') {

						get_template_part('template-parts/content-events', get_post_type());
					} else if ($slug == 'transactions') {

						get_template_part('template-parts/content-transactions', get_post_type());
					} else {

						get_template_part('template-parts/content-news', get_post_type());
					}


				endwhile;
				?>
			</div>
			<div class="copterpix-more-team-btn">
				<button id="copterpix-more-team-activity" class="copterpix-btn"><?php _e("View More", "copterpix"); ?></button>
			</div>
		<?php

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>

</main><!-- #main -->

<?php

get_footer();
