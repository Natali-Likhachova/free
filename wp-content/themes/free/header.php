<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="header">
    <div class="header__logo">
        <a href="<?php echo home_url()?>">
            <?php  bloginfo('name')?>
        </a>
    </div>
    <div class="burger">
        <input id="burger" type="checkbox" />

        <label for="burger">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <nav>
            <?php
            wp_nav_menu( array(
                'theme_location' =>  'main-burger',
                'container' => false,
                'menu_class' => 'menu_false',
            ));
            ?>
        </nav>
    </div>

</header>
