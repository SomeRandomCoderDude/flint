<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Company Logo"
                        class="img-fluid">
                </a>
                <nav class="d-flex align-items-center">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav-items',
                        'container' => false,
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>
    <?php wp_footer(); ?>
</body>

</html>