<?php
/**
*   Template part for displaying content in the single.php template (individual/article blog page)
*   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package Espresso Lounge & Cafe
* @since 1.0
*/
?>
    
    <?php the_content(); ?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="produce-title text-center max">
        <div>
            <h2>
                <?php $pTitle = get_field('produce-title') ?>
                <?php if($pTitle){ _e($pTitle);} ?>
            </h2>
        </div>
        <div>
            <?php $pTextarea = get_field('produce-text') ?>
            <?php if($pTextarea){ _e($pTextarea);} ?>
        </div>
    </div> 
    <!-- /produce-title -->

        <div class="text-center">
            <h2>
            <?php $sectionTitle = get_field('section-title') ?>
            <?php if($sectionTitle){ _e($sectionTitle);} ?>
            </h2>
        </div>
        <div class="produce-content text-center max">

            <div class="produce-card flex">

                <div class="p-img">
                    <img src=" <?php $image1 = get_field('p-img-1') ?> 
                    <?php if($image1){ _e($image1);} ?>">
                </div>
                    
                <div class="p-text">
                    <?php $text1 = get_field('p-text-1') ?>
                    <?php if($text1){ _e($text1);} ?>
                </div>
            
            </div> 
            <!-- /produce-card -->

            <div class="produce-card flex">
                    
                    <div class="p-text">
                        <?php $text2 = get_field('p-text-2') ?>
                        <?php if($text2){ _e($text2);} ?>
                    </div>
                
                    <div class="p-img">
                        <img src=" <?php $image2 = get_field('p-img-2') ?> 
                        <?php if($image2){ _e($image2);} ?>">
                    </div>
    
                </div> 
                <!-- /produce-card -->

                <div class="produce-card flex">

                    <div class="p-img">
                        <img src=" <?php $image3 = get_field('p-img-3') ?> 
                        <?php if($image3){ _e($image3);} ?>">
                    </div>
                        
                    <div class="p-text">
                        <?php $text3 = get_field('p-text-3') ?>
                        <?php if($text3){ _e($text3);} ?>
                    </div>

                </div> 
                <!-- /produce-card -->
        </div>   
        <!-- /produce-content -->

        <div class="text-center max">
            <p>
                <?php $titleEnd = get_field('produce-text-end') ?>
                <?php if($titleEnd){ _e($titleEnd);} ?>
            </p>
        </div>

        <div class="text-center all-produce-links">
            <h4 class="upper">Yanalla Tropical fruits</h4>
            <div class="flex produce-links">
                <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/produce/custard-apples/" class="text-bold upper">Custard Apples</a>
                <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/produce/dragon-fruit/" class="text-bold upper">Dragon Fruit</a>
                <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/produce/lychees/" class="text-bold upper">Lychee</a>
            </div>
            
        </div>

</article>

