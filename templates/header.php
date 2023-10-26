<?php
/**
 * The Header
 * Displays all of the <head> section and everything up till <main id="main">
 * 
 * The class located in classes/templates/header.php defines all variables below
 */

$header = new Views\Header(); 
?>
<!DOCTYPE html>
    <head>
        <title><?php wp_title(); ?></title> 
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="icon" type="image/x-icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php wp_head();	?>
    </head>
    <body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
       <header class="header <?php echo $header->properties['class'] ?>" id="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
            <?php if( $header->properties['logo'] ) { ?>            
                <a class="logo" href="<?php echo $header->properties['url'] ?>" title="<?php echo $header->properties['name'] ?>" rel="home" itemscope="itemscope" itemtype="http://schema.org/<?php echo $header->properties['logo_schema']; ?>">
                    <?php echo $header->properties['logo'] ?>
                    <meta itemprop="name" content="<?php echo $header->properties['name']; ?>" />
                </a>
            <?php } ?> 
            <?php if( $header->properties['title'] ) { ?>              
                <div class="site-title">
                    <h2>
                        <a href="<?php echo $header->properties['url'] ?>" title="<?php echo $header->properties['name'] ?>" rel="home">
                            <?php echo $header->properties['name'] ?>
                        </a>
                    </h2>
                    <?php if( $header->properties['description'] ) { ?>
                        <p class="site-description">
                            <?php echo $header->properties['description'] ?>
                        </p>
                    <?php } ?>
                </div> 
            <?php } ?> 
            <nav class="main-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( ['container_class' => 'menu-header', 'theme_location' => 'primary'] ); ?>
            </nav><!-- .main-navigation --> 
        </header><!-- .header --> 
        <a class="hamburger-menu" href="#"><i class="icon-bars"></i></a>
        <main class="main" id="main" <?php echo $header->properties['main_schema'] ?>>