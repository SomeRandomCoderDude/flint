<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                    </article>
                    <?php
                endwhile;
            else:
                echo '<p>No content found</p>';
            endif;
            ?>
        </div>

        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>