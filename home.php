<?php
/**
 * Template Name: Home Page
 * The template for displaying the homepage.
 */
get_header(); // Include header.php
?>

<main class="home-main">
    <!-- Hero Section -->
    <section class="hero-section"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero.png');">

    </section>

    <!-- Introduction heading -->
    <section class="services-section d-flex justify-content-center">
        <div class="services-content d-flex flex-column">
            <h2>INTRODUCTION HEADING - OUR USP</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Tristique senectus et netus
                et
                malesuada fames ac turpis. Sed vulputate mi sit amet mauris commodo quis. Neque viverra justo nec
                ultrices
                dui sapien eget. Dui ut ornare lectus sit amet est placerat. A diam sollicitudin tempor id eu nisl nunc
                mi.
                Magna fermentum iaculis eu non diam phasellus vestibulum lorem.</p>
        </div>
    </section>


</main>

<?php
get_footer(); // Include footer.php
?>