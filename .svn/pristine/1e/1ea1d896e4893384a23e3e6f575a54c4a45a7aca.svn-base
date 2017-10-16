<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="inr_header" style="background-image:url(images/header.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page_title">  </h1>
            </div>
        </div>
    </div>
</section>


<section class="page_contianer">
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

</section>

<?php get_footer();
