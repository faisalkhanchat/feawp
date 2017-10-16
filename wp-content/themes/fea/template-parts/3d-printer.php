<?php
 /*
 Template Name: 3D Printer page
 */

get_header(); ?>
<?php
$header_image = get_field( "upload_header_banner_image" );
$sub_title = get_field( "sub_title" );
$short_description = get_field( "short_description" );
?>

<section class="inr_header_product" style="background-image:url(<?php echo $header_image ?>)">
<div class="breadcrumbs_blk">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            if( function_exists( 'lana_breadcrumb' ) ) {
                echo lana_breadcrumb();
            }
            ?>
        </div>
    </div>
</div>    
</div>   
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="product_title"><?php echo the_title(); ?></h1>
                <h2 class="cat_title"><?php echo $sub_title; ?></h2>
                <p class="p_short_des"><?php echo $short_description; ?></p>
                <a href="" class="btn btn-lg btn_get_a_quote">Get a quote</a>
                <a href="" class="btn btn-lg btn_contact_sales">Contact Sales</a>
            </div>
        </div>
    </div>
    
</section>

<section class="products_list">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
<?php
while ( have_posts() ) : the_post();
the_content();
endwhile; 
wp_reset_query(); 
?>
            

            </div>
        </div>
    </div>

    <div class="row">
    
            <?php 
              $args = array(
                  'parent' => 91,
                  'post_type' => 'page',
                  'orderby' => 'ASC',
                  'post_status' => 'publish'
              ); 
              $pages = get_pages($args);  ?>    
                <?php foreach( $pages as $page ) { 
                //print_r($pages); exit;
            ?>	
                    <div class="col-sm-4">
                      <a href="<?php echo get_page_link( $page->ID );?>" class="blk_product">
                          <div class="imgblk"><img src="<?php echo get_the_post_thumbnail_url($page->ID, 'full'); ?>" /></div>
                        <h3><?php echo $page->post_title; ?></h3>
                        <h4><?php echo $page->sub_title; ?></h4>              
                      </a>            
                    </div>
            <?php } ?>     
        
    </div>
</section>



<?php get_footer();
