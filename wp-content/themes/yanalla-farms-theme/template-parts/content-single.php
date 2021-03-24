<?php
/***
* Template part for displaying content in the single.php template (individual/article blog page)
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package vet-clinic
* @since 1.0.0
*/
?>
<header>
    <div class="blog-banner">
        <img src=" <?php $banner = get_field('img-blog') ?> 
        <?php if($banner){ _e($banner);} ?>">
    </div>
     <?php $topText = get_field('banner-text') ?>
        <?php if($topText){ _e($topText);} ?>
</header>

<article class="single-blog-container" <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="flex-blog-sidebar">
            <div class="text-center blog-text max">
                <?php the_title('<h1 class="post-title">', '</h1>'); ?>
                <div class="home-cates">
                    <?php the_category(); ?>
                    <?php echo get_the_date(); ?>
                </div>      
                    <?php the_excerpt(); ?>   

                <div>
                    <?php $topText = get_field('only-text') ?>
                    <?php if($topText){ _e($topText);} ?>
                </div>

        <div class="produce-content text-center">   

            <div class="produce-card flex">
                    
                    <div class="p-text">
                        <?php $bText1 = get_field('b-text-1') ?>
                        <?php if($bText1){ _e($bText1);} ?>
                    </div>

                    <div class="p-img">
                        <img src=" <?php $bImage1 = get_field('b-img-1') ?> 
                        <?php if($bImage1){ _e($bImage1);} ?>">
                    </div>  
    
                </div> 
                <!-- /produce-card -->

                <div class="produce-card flex">
                    
                    <div class="p-img">
                        <img src=" <?php $bImage2 = get_field('b-img-2') ?> 
                        <?php if($bImage2){ _e($bImage2);} ?>">
                    </div>
                        
                    <div class="p-text">
                        <?php $bText1 = get_field('b-text-2') ?>
                        <?php if($bText1){ _e($bText1);} ?>
                    </div>

                </div> 
                <!-- /produce-card -->

                <div class="produce-card flex p-card-3">
                    
                    <div class="p-text">
                        <?php $bText3 = get_field('b-text-3') ?>
                        <?php if($bText3){ _e($bText3);} ?>
                    </div>
                
                    <div class="p-img">
                        <img src=" <?php $bImage3 = get_field('b-img-3') ?> 
                        <?php if($bImage3){ _e($bImage3);} ?>">
                    </div>
    
                </div> 
                <!-- /produce-card -->

                <div>
                    <?php $bottomText = get_field('blog-text-end') ?>
                    <?php if($bottomText){ _e($bottomText);} ?>
                </div>
        </div>   
        <!-- /produce-content -->

            </div>
            <!-- /blog-text -->

        <div class="sidebar-right sidebar-single">
            <?php if(is_active_sidebar('sidebar-primary')) : ?>
                <?php dynamic_sidebar('sidebar-primary');?>
            <?php endif; ?>
        </div>
    </div>
  
</article>