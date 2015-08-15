<?php
/**
 * Template Name: Home Page
 */

get_header(); 
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
            
                        <?php while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header><!-- .entry-header -->

                            <div class="entry-content">

                               <?php 
                                $video      = get_field('home_video');
                                $intro      = get_field('home_intro');
                                $directory  = get_field('home_directory');
                                
                                if ( $video ) echo '<div class="embed-container">'.$video.'</div>';
                                if ( $intro ) echo '<div class="intro-container">'.$intro.'</div>';
                                if ( $directory ) {
                                    echo '<div class="directory">';
                                    foreach ($directory as $d) {
                                        $title  = $d[ 'dir_title' ];
                                        $text   = $d[ 'dir_text' ];
                                        $link   = $d[ 'dir_link' ];
                                        $class  = $d[ 'dir_class' ];

                                        echo '<div class="well ' . $class . '">';
                                            echo '<h3><a href="' . $link . '">'. $title .'</a></h3>';
                                            echo $text;
                                            echo '<i class="fa fa-hand-o-right"></i> <a href="' . $link . '">Learn More</a>';
                                        echo '</div>';
                                    }
                                    echo '</div>';
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
