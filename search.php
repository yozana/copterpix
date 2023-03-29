<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package copterpix
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php

		if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'copterpix'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
			</header><!-- .page-header -->



		<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();



				$tcopterpixs = wp_get_post_categories(get_the_ID(), array('fields' => 'slugs'));

				if (in_array('news', $tcopterpixs)) {

					get_template_part('template-parts/content-news', get_post_type());
				} else if (in_array('publications', $tcopterpixs)) {

					get_template_part('template-parts/content-publications', get_post_type());
				} else if (in_array('events')) {

					get_template_part('template-parts/content-events', get_post_type());
				} else if (in_array('transactions', $tcopterpixs)) {

					get_template_part('template-parts/content-transactions', get_post_type());
				} else {

					get_template_part('template-parts/content', 'search');
				}


				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
			//get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>
</main><!-- #main -->

<?php
get_footer();
