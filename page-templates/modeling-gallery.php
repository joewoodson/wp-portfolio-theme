<?php 
    /*
    Template Name: Modeling Gallery
    Description: Creates a gallery of featured images from a custom post type
    Notes: Make sure you have support for thumbnails enabled
    */

    get_header(); 

    // Query the custom post type to display
    $args = array('post_type' => 'modeling-photo');
    $query = new WP_Query( $args );
?>


<section id="modeling-gallery" class="row no-max pad">

    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="modeling-thumb text-center small-6 medium-4 large-2 columns grid-item end">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

</section>

<?php get_footer(); ?>


