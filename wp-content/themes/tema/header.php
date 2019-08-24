<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Accesspress Basic
 */
?><!DOCTYPE html>
<?php
    global $apbasic_options;
    $apbasic_settings = get_option('apbasic_options',$apbasic_options);
    if ( is_array( $apbasic_settings ) && ! empty( $apbasic_settings )) {
        extract($apbasic_settings);
    }
    
    $site_class = null;
    if($site_layout == 'boxed'){
        $site_class = 'boxed-layout';
    }

    $header_class = '';
    switch($show_header){
        case 'header_logo_only' :
            $header_class = 'header-logo-only';
            break;
        case 'header_text_only' :
            $header_class = 'header-text-only';
            break;
        case 'show_both' :
            $header_class = 'header-text-logo';
            break;
    }
?>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.29473.js"></script>
</head>

<body <?php body_class($site_class); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'accesspress-basic' ); ?></a>

	<header id="masthead" class="site-header <?php echo $header_class; ?>" role="banner">
        	<div class="top-header clearfix">
                <div class="ap-container">
                    <div class="site-branding">
                           <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" />
            		</div><!-- .site-branding -->
                    <div class="right-top-head">
                        <?php if(is_active_sidebar('apbasic_header_text')) : ?>
                            <div class="call-us"><?php dynamic_sidebar('apbasic_header_text'); ?></div>
                        <?php else : ?>
                            <?php if(!empty($header_text)) : ?>
                                Horário de Atendimento: 08h às 17h<br/>
                                (31) 3314-4861
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($show_social_links == 1 && is_active_sidebar('apbasic_header_social_links')) : ?>
                        <div class="social-icons-head">
                            <div class="social-container">
                                <?php dynamic_sidebar('apbasic_header_social_links'); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div> <!-- ap-container -->
            </div> <!-- top-header -->
            
            <div class="menu-wrapper clearfix"> 
                <div class="ap-container">
                    <a class="menu-trigger"><span></span><span></span><span></span></a>   
            		<nav id="site-navigation" class="main-navigation" role="navigation">
            			<button class="menu-toggle hide" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'accesspress-basic' ); ?></button>
            			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            		</nav><!-- #site-navigation -->
                    <?php if($show_search == 1) : ?>
                        <div class="search-icon">
                        <i class="fa fa-search"></i>
                        <div class="ak-search">
                            <div class="close">&times;</div>
                                 <form action="<?php echo site_url(); ?>" class="search-form" method="get" role="search">
                                    <label>
                                        <span class="screen-reader-text"><?php _e('Search for:', 'accesspress-basic'); ?></span>
                                        <input type="search" title="Search for:" name="s" value="" placeholder="<?php _e('Buscar por...', 'accesspress-basic'); ?>" class="search-field">
                                    </label>
                                    <input type="submit" value="Buscar" class="search-submit">
                                 </form>
                            <div class="overlay-search"> </div> 
                        </div>
                    </div> 
                <?php endif; ?>
                </div>
            </div>
            <nav id="site-navigation-responsive" class="main-navigation-responsive">
    			<button class="menu-toggle hide" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'accesspress-basic' ); ?></button>
    			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
    <?php
        if($show_slider == 'yes') :
            if($show_slider_in_post == 1) :
                 if(is_front_page() || is_single()) :
                 ?>
                <div class="ap-basic-slider-wrapper">
                <div class="ap-container">
                 <?php 
                    do_action('accesspress_basic_slider');
                ?>
                </div>
                </div>
                <?php
                 endif;
            else:
                if(is_front_page()) :
                ?>
                <div class="ap-basic-slider-wrapper">
                <div class="ap-container">
                <?php
                    do_action('accesspress_basic_slider');
                ?>
                </div>
                </div>
                <?php
                endif;
            endif;
        endif;
    ?>