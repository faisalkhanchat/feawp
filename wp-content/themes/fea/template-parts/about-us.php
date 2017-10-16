<?php
 /*
 Template Name: About Us 
 */

get_header(); ?>
<?php/*
$header_image = get_field( "upload_header_banner_image" );*/
?>


<section class="inr_header" style="background-image:url(<?php echo $header_image;  ?>)">
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
                <!--<h1 class="page_title">  </h1>-->
            </div>
        </div>
    </div>
</section>

<?php
/*$title_ab = get_field( "title_ab" );
$description_ab = get_field( "description_ab" );
$right_image = get_field( "right_image" );*/
?>
<section class="about_us">
    <div class="container">
        <div class="row">
           <div class="col-sm-12"><h3><?php echo the_title(); ?></h3></div>
            <div class="col-sm-7">
                <h2><?php echo $title_ab ?></h2>
                <?php echo $description_ab ?>
                
            </div>
            <div class="col-sm-5">
                <img src="<?php echo $right_image ?>" alt="">
            </div>
        </div>
    </div>
</section>
<?php
$custom = get_post_meta(get_the_ID());
                    echo '<pre>'; print_r($custom); exit;
foreach($custom as $key => $value) {
     echo $key.': '.$value.'<br />';
}

?>
<section class="expertise_training">
    <div class="row no-gutter">
        <div class="col-sm-5">
            <div class="texblk">
            
            <h2>Our Expertise</h2>
            <ul>
                <li>3D Parametric Modeling (Parts, Assemblies and Drawings)</li>
                <li>Structural Analysis</li>
                <li>Linear and Non-Linear Analysis</li>
                <li>Thermal Analysis</li>
                <li>Pressure Vessel Analysis</li>
                <li>Optimization and Dynamic Analysis</li>
                <li>CFD – Liquid and Gas Flow</li>
                <li>Heat Transfer</li>
            </ul>    
            </div>
            
        </div>
        <div class="col-sm-7">           
            <div class="texblk">
            <h2>Why FEA Training Consultants Inc.?</h2>
            <ul>
                <li>We are Ontario's best reseller specializing in SolidWorks(3D design, FEA and CFD) needs.</li>
                <li>We are your local Canadian supplier of SolidWorks products and services</li>
                <li>Superior customer service and technical support	</li>
                <li>We are a team of professionals with high expertise and a proven track record.</li>
                <li>We have served and supported the SolidWorks channel for over 14 years</li>
                <li>Our training (for 3D design, FEA/CFD) is the best in its class - we train and mentor you one-on-one using your models</li>
                <li>Get customized training and support for your specific needs.</li>
                <li>We strive to provide affordable solutions at great quality.</li>
                <li>If you are thinking of buying SolidWorks let us be the obvious choice. Let's work together to build better products.</li>
            </ul>
            </div>
        </div>
        
    </div>
</section>


<?php get_footer();
