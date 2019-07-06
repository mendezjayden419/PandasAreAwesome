<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 3/30/2019
 * Time: 9:47 PM
 */

get_header(); ?>
    <section id="post-listing" class="content-area testing-this">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    ?>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="img-fluid">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="post-content font-white"><?php the_content(); ?></div>
                <?php
                endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div><!-- #main -->
    </section><!-- #primary -->
<?php get_footer(); ?>
