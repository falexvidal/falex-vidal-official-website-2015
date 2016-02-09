<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Falex Vidal</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/animate.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/animate.min.css" type="text/css" media="screen" />
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/fx.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/wow.js"></script>
<script>
    new WOW().init();
</script>
<!--START Scripts-->
<script type="text/javascript" src="http://blog.falexvidal.com/wp-includes/js/jquery/jquery.js?ver=2.6.14"></script>
<script type="text/javascript" src="http://blog.falexvidal.com/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-pt.js?ver=2.6.14"></script>
<script type="text/javascript" src="http://blog.falexvidal.com/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.6.14"></script>
<script type="text/javascript" src="http://blog.falexvidal.com/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.14"></script>
<script type="text/javascript">
                /* <![CDATA[ */
                var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://blog.falexvidal.com/wp-admin/admin-ajax.php","loadingTrans":"Carregando..."};
                /* ]]> */
                </script><script type="text/javascript" src="http://blog.falexvidal.com/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.14"></script>
<!--END Scripts-->

<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]>
  <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
<!--[if lt IE 7]>
 
  <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
</head>
 
<body>
    
    <!--header -->
    <header>
        <nav>
            <ul>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </ul>
        </nav>
        
        <video autoplay muted loop poster="images/central-park.png" id="bgvid">
            <source src="<?php echo get_template_directory_uri(); ?>/images/central-park.webm" type="video/webm">
            <source src="<?php echo get_template_directory_uri(); ?>/images/central-park.mp4" type="video/mp4">
        </video>
        
        <div id="logo">
            <div class="box">
                <span class="social-left">
                    <a href="http://www.twitter.com/falexcartoonist" target="_blank" class="twitter"></a>
                    <a href="https://www.youtube.com/channel/UCU5OF1LVHvy4nCQsFfxV5zg" target="_blank" class="youtube"></a>
                </span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-logo" />
                <hgroup>
                    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                    <h3><?php bloginfo( 'description' ); ?> </h3>
                </hgroup>
                <span class="social-right">
                    <a href="https://instagram.com/thedesignslayer/" target="_blank" class="instagram"></a>
                    <a href="https://vimeo.com/falexvidal" target="_blank" class="vimeo"></a>
                </span>
            </div>
        </div>
            
    </header>
    <!--header -->
    
    <div id="main">