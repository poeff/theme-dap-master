<?php

$n      = 1;
$pageId = $post->ID;
$args   = array(
                'post_parent'   => $pageId,
                'post_type'     => 'page',
                'orderby'       => 'menu_order',
                'order'         => ASC
            );

$subpages = new WP_Query( $args );

if ($subpages) : while ( $subpages->have_posts() ) : $subpages->the_post();

    $excerpt = get_field( 'excerpt_text' );
    $thumb   = get_field( 'excerpt_image' );
    
    echo '<div class="excerpt" id="excerpt-'.$n.'">';
        echo '<div class="row">';
            echo '<div class="col-sm-4">';

                if ( $thumb ) { 

                    echo '<a href="' . get_permalink() . '">'; 

                        echo '<img class="img-responsive img-rounded" src="' . $thumb . '" alt="' . get_the_title() . '"/>'; 
                    
                    echo '</a>';
                
                } 

            echo '</div>';

            echo '<div class="col-sm-8">';

                echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
                
                if ( $excerpt && $excerpt !='' ) {
                
                    echo $excerpt;
                
                } else {
                
                    echo '<p>' . get_the_excerpt() . '</p>';
                
                }
                
                echo '<i class="fa fa-hand-o-right"></i> <a href="' . get_permalink() . '">View Curriculum</a>';

            echo '</div>';
        echo '</div>';
    echo '</div>';
    $n++;
        
endwhile; endif;

wp_reset_query(); 

?>