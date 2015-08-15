<?php
/**
 * Template Name: Landing Page
 */
$keywords = get_field('meta_keywords', options);
$description = get_field('meta_description', options);
$analytics = get_field('ga_header', options);
$privacy = get_field('privacy_policy', options);
$logo = get_field('lp_logo');
$intro = get_field('lp_intro');
$hero = get_field('lp_hero');
$form = get_field('lp_form');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php if ( $keywords ) echo "<meta name=\"keywords\" content=\"$keywords\">\n"; ?>
    <?php if ( $description ) echo "<meta name=\"description\" content=\"$description\">\n"; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script type="text/javascript" src="//use.typekit.net/ywo0yzp.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>
    <?php if ( $analytics ) echo $analytics . "\n"; ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php do_action( 'before' ); ?>
    <header id="masthead" class="site-header container" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <?php if ( $logo ) {
                        echo '<img class="logo img-responsive" src="' . $logo . '" alt="' . get_bloginfo( 'name' ) . '" />';
                    } ?>
                </div><!-- .col-sm-2 -->
                <div class="col-sm-9 col-md-10">
                    <h1 class="page-title"><?php bloginfo( 'name' ); ?></h1>
                    <h2 class="tagline"><?php bloginfo( 'description' ); ?></h2>
                    <?php if ( $intro ) {
                        echo $intro;
                    } ?>
                </div><!-- .col-sm-10 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="entry-content">
                            <?php 
                            if ( $hero ) {
                                echo '<img class="hero img-responsive" src="' . $hero . '" alt="' . get_bloginfo( "description" ) . '">';
                            }
                            the_content(); 
                            ?>
                        </div><!-- .entry-content -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <footer id="colophon" class="site-footer" role="contentinfo">
                    <div class="site-info">
                        <ul class="list-inline">
                            <li>&copy; <?php the_time( 'Y' ) ?> Peace On Earth Film Festival, all rights reserved.</li>
                            <?php 
                            if ( $form ) {
                                echo '<li><a href="#contactModal" data-toggle="modal">Contact Us</a></li>';
                            }
                            if ( $privacy ) {
                                echo '<li><a href="#privacyModal" data-toggle="modal">Privacy Policy</a></li>';
                            } 
                            ?>
                        </ul>
                        <p><small>The Peace On Earth Film Festival is neither affiliated nor sponsored by Universal Studios</small></p>
                    </div><!-- .site-info -->
                </footer><!-- #colophon -->
            </div><!-- .col-md-12 -->
        </div><!-- .row -->
    </div><!-- container -->
</div><!-- #page -->

<?php if ( $form ) : ?>
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="contactModalLabel">Contact Us</h3>
                </div>
                <div class="modal-body">
                    <?php echo $form; ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php endif; ?>

<?php if ( $privacy ) : ?>
    <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="privacyModalLabel">Privacy Policy</h3>
                </div>
                <div class="modal-body">
                    <?php echo $privacy; ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
