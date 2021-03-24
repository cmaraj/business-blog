<?php
/*
* This template is for displaying all full articles (post types).
* This is the template that displays all pages by default. Please note that is WordPress construct of pages and other 'pages' on your wp site will use different.
*
* @package yanalla
* @since 1.0.0
*/
//display header
get_header();
?>

<header>
    <?php the_content(); ?>
</header>

<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="produce-title  text-center max">
        <div>
            <h2>
                <?php $gTitle = get_field('grower-title') ?>
                <?php if($gTitle){ _e($gTitle);} ?>
            </h2>
        </div>
        <div>
            <?php $gTextarea = get_field('grower-text') ?>
            <?php if($gTextarea){ _e($gTextarea);} ?>
        </div>
    </div> 
    <!-- /produce-title -->

        <div class="text-center">
            <h2>
            <?php $sectionTitle = get_field('section-title') ?>
            <?php if($sectionTitle){ _e($sectionTitle);} ?>
            </h2>
        </div>
        <div class="produce-content padding-grower text-center max">
            <div class="produce-card flex">

                <div class="p-text c-1">
                    <?php $text1 = get_field('g-text-1') ?>
                    <?php if($text1){ _e($text1);} ?>
                </div>
                    
                <div class="p-text c-2">
                    <?php $text2 = get_field('g-text-2') ?>
                    <?php if($text2){ _e($text2);} ?>
                </div>

            </div> 
            <!-- /produce-card -->

            <div class="produce-card flex">

                <div class="p-img">
                    <img src=" <?php $image1 = get_field('g-img-1') ?> 
                    <?php if($image1){ _e($image1);} ?>">
                </div>
                    
                <div class="p-text c-3">
                    <?php $text3 = get_field('g-text-3') ?>
                    <?php if($text3){ _e($text3);} ?>
                </div>
            
            </div> 
            <!-- /produce-card -->

            <div class="produce-card flex">

                <div class="p-text c-4">
                    <?php $text4 = get_field('g-text-4') ?>
                    <?php if($text4){ _e($text4);} ?>
                </div>
                    
                <div class="p-text c-5">
                    <?php $text5 = get_field('g-text-5') ?>
                    <?php if($text5){ _e($text5);} ?>
                </div>

            </div> 
            <!-- /produce-card -->

            <div class="produce-card flex">
                    
                    <div class="p-text c-6">
                        <?php $text6 = get_field('g-text-6') ?>
                        <?php if($text6){ _e($text6);} ?>
                    </div>
                
                    <div class="p-img">
                        <img src=" <?php $image2 = get_field('g-img-2') ?> 
                        <?php if($image2){ _e($image2);} ?>">
                    </div>
    
                </div> 
                <!-- /produce-card -->

            <div class="produce-card flex">

                <div class="p-text c-7">
                    <?php $text7 = get_field('g-text-7') ?>
                    <?php if($text7){ _e($text7);} ?>
                </div>
                    
                <div class="p-text c-8">
                    <?php $text8 = get_field('g-text-8') ?>
                    <?php if($text8){ _e($text8);} ?>
                </div>

            </div> 
            <!-- /produce-card -->
        </div>   
        <!-- /produce-content -->

</article>

 <!-- display footer -->
 <?php get_footer(); ?>