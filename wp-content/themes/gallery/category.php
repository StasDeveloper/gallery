<?php
/**
 * The template for displaying category
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
//var_dump($paged);
?>

    <div class="wrap">

        <?php

        //$default_posts_per_page = get_option( 'posts_per_page' );
        //update_option('posts_per_page', 1);
       // var_dump(get_option( 'posts_per_page' ));
        $query = new WP_Query( array(
            'paged' => $paged,
            'posts_per_page'=>1,
            'orderby' => 'date',
            'order' => 'ASC',
            'cat' => 2,
            'ignore_sticky_posts' => 1
        ) );
        //$query = new WP_Query(array('post_type' => array('post','page')));

        //var_dump($query);die();
        ?>

        <?php if ( $query->have_posts() ) : ?>
            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->
        <?php endif; ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if ( $query->have_posts() ) : ?>
                    <?php
                    /* Start the Loop */
                    while ( $query->have_posts() ) : setup_postdata($query->the_post());

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/post/content', get_post_format() );

                    endwhile;
                ?>


                    <?php previous_posts_link('Prev', $query->max_num_pages ); ?>
                    <?php next_posts_link( 'Next', $query->max_num_pages ); ?>

                <?php

                else :

                    get_template_part( 'template-parts/post/content', 'none' );

                endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->
        <?php //get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer();
