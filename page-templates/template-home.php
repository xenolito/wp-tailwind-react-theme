<?php
/**
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

get_header();

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'views/content', 'page' );

            ?>
            <?php

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile;

get_footer();
