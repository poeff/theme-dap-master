<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 *
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<script type="text/javascript" src="//use.typekit.net/ywo0yzp.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php do_action( 'before' ); ?>
    <header id="masthead" class="site-header" role="banner">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
<!--
                            <a href="< ?php echo esc_url( home_url( '/' ) ); ?>" title="< ?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"  class="navbar-brand">< ?php bloginfo( 'name' ); ?></a>
-->
                        </div>

                        <?php
                        $args = array('theme_location' => 'primary',
                                      'container_id' => 'main-menu-wrapper',
                                      'container_class' => 'navbar-collapse collapse',
                                      'menu_class' => 'nav navbar-nav',
                                      'fallback_cb' => '',
                                      'menu_id' => 'main-menu',
                                      'walker' => new Upbootwp_Walker_Nav_Menu());
                        wp_nav_menu($args);
                        ?>
                        <div class="navbar-collapse collapse" id="user-menu-wrapper">
                            <ul class="nav navbar-nav navbar-right" id="user-menu">
                                <li class="navbar-right signed-in">
                                    <a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout"><i class="fa fa-times"></i> Log Out</a>
                                </li>
                                <li class="navbar-right signed-out">
                                    <a href="<?php echo home_url( $path = 'login', $scheme = relative ); ?>" title="Login"><i class="fa fa-sign-in"></i> Login</a>
                                </li>
                                <li class="navbar-right signed-in">
                                    <a href="<?php echo home_url( $path = 'profile', $scheme = relative ); ?>" title="Profile"><i class="fa fa-user"></i> Profile</a>
                                </li>
                                <li class="navbar-right signed-out">
                                    <a href="<?php echo home_url( $path = 'register', $scheme = relative ); ?>" title="Register"><i class="fa fa-pencil-square-o"></i> Register</a>
                                </li>
                            </ul>
                        </div>

                    </div><!-- .col-md-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </nav>
        <div class="container" id="logo-wrap">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <img class="logo img-responsive" src="/wp-content/uploads/2014/06/logo.png" alt="Dialogue for Peace" />
                </div><!-- .col-sm-2 -->
                <div class="col-sm-9 col-md-10">
<!--                     <h1 class="page-title">< ?php bloginfo( 'name' ); ?></h1>
                    <h2 class="tagline">< ?php bloginfo( 'description' ); ?></h2> -->
                    <h1 class="page-title">
                        <?php bloginfo( 'name' ); ?>
                        <small><?php bloginfo( 'description' ); ?></small>
                    </h1>
                </div><!-- .col-sm-10 -->
            </div><!-- .row -->
        </div><!-- .container -->

    </header><!-- #masthead -->


    <div id="content" class="site-content">
