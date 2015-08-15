<?php
/**
 * Template Name: Peace Week Page
 */

get_header(); 
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area restricted">
                    <main id="main" class="site-main" role="main">
            
                        <?php while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header><!-- .entry-header -->

                            <div class="entry-content">

                               <?php 
                                if ( get_field( 'view_options', options ) === 'Content' ) {
                                    the_content();
                                    if ( get_field('copyright_films', options) ) {
                                        echo '<hr><p><small>' . get_field('copyright_films', options) . '</small></p>';
                                    }
                                } else {
                                    echo get_field( 'placeholder', options );
                                }
                                ?>

                                <?php
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),
                                        'after'  => '</div>',
                                    ));
                                ?>
                            </div><!-- .entry-content -->
                            <?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                        </article><!-- #post-## -->
                            
                        <?php endwhile; // end of the loop. ?>
            
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .col-md-8 -->
            
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div><!-- .col-md-4 -->
        </div><!-- .row -->
    </div><!-- .container -->
<?php get_footer(); ?>
