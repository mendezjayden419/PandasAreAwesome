<?php

/*
*
* Template Name: Post Listing
* Template Post Type: post, page, product
*
*/

get_header();
?>

	<section id="post-listing" class="content-area">
		<div class="container">
			<div class="row">
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	                ?>
					<a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?>
	                <?php if ( has_post_thumbnail() ) : ?>
	                	<div class="img-fluid">
	                		<?php the_post_thumbnail(); ?>
                		</div>
                	<?php endif; ?>
	                <div class="post-content font-white"><?php the_content(); ?></div>
					</a>
	            <?php
	            endwhile; else: ?>
	                <p>Sorry, no posts matched your criteria.</p>
	            <?php endif; ?>
	        </div>
		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
