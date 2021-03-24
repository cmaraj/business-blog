<?php
/**
*   Template part for displaying content in the single.php template (individual/article blog page)
*   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package yanalla farms
* @since 1.0
*/
?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >


<div class="home-info text-center">
        <h2>YANALLA FARMS FRUITFULNESS</h2>
        <p>We are a specialist producer of luscious tropical fruits, grown in perfect Queensland conditions and ripe with delicious, healthy nutrition. Most of our  production of custard apple, dragonfruit and lychee is sold through interstate wholesalers but there’s some for locals too!</p>
</br>

        <p>Yanalla Farms is the home of an exciting, new PinksBlush pink-skinned custard apple, which will be licensed to other growers soon; and the award-winning, innovative Custard Dust® sweetener, currently in development.</p>
    </div>

    <?php
        $args = array (
            'post_type' => 'produce',
            'posts_per_page' => 3, 
        );
        $the_produce_query = new WP_Query($args);
    ?>

   <!-- loop for displaying the custom content -->
   <div class="home-produce flex">
            <?php if( $the_produce_query->have_posts() ) : ?>
                <?php while ( $the_produce_query->have_posts() ) : $the_produce_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="produce-card overflow-black">
                    <!-- card header -->
                    <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                        <div class="produce-card-heading">
                            <?php the_title('<h4>', '</h4>'); ?>
                        </div>          
                    </div>
                </a>
                    <!-- /produce card -->
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
        <!-- / home-produce -->

        <div class="home-squares">

            <div class="text-story flex">
                    <div class="our-story-text text-center home-text-box">
                        <h3 class="upper">
                            <?php $titleApp = get_field('story-title') ?>
                            <?php if($titleApp){ _e($titleApp);} ?>
                        </h3>
                        <p>
                            <?php $textApp = get_field('story-text') ?>
                            <?php if($textApp){ _e($textApp);} ?>
                        </p>

                        <div class="story-link">
                            <?php $buttonApp = get_field('story-button') ?>
                                <?php if($buttonApp): 
                                    $link_title = $buttonApp['title'];
                                    $link_url = $buttonApp['url'];
                                ?>
                                <!-- create the url  -->
                                    <div class="story-button">
                                        <a href="<?php print_r(esc_url($link_url)); ?>">
                                            <?php print_r(esc_html($link_title)); ?>
                                        </a>
                                    </div>
                                
                                <?php endif; ?>
                        </div>
                        <!-- /story-link -->
                    </div>
                    <!-- /div -->

                        <div class="img-story p-img">
                            <img src=" <?php $images = get_field('story-img') ?> 
                            <?php if($images){ _e($images);} ?>">
                        </div>
                        <!-- /img-content -->

                </div>
                <!-- /text-story --> 

            <div class="text-events flex">

                    <div class="img-events p-img">
                        <img src=" <?php $images = get_field('events-img') ?> 
                        <?php if($images){ _e($images);} ?>">
                    </div>
                    <!-- /img-content -->

                    <div class="event-text text-center home-text-box">
                        <h3 class="upper">
                            <?php $titleApp = get_field('events-title') ?>
                            <?php if($titleApp){ _e($titleApp);} ?>
                        </h3>
                        <p>
                            <?php $textApp = get_field('event-text') ?>
                            <?php if($textApp){ _e($textApp);} ?>
                        </p>

                        <div class="events-link">
                            <?php $buttonApp = get_field('event-button') ?>
                                <?php if($buttonApp): 
                                    $link_title = $buttonApp['title'];
                                    $link_url = $buttonApp['url'];
                                ?>
                                <!-- create the url  -->
                                    <div class="events-button upper">
                                        <a href="<?php print_r(esc_url($link_url)); ?>">
                                            <?php print_r(esc_html($link_title)); ?>
                                        </a>
                                    </div>
                                
                                <?php endif; ?>
                        </div>
                        <!-- /events-link -->
                    </div>
                    <!-- /div -->
                        
                </div>
                <!-- /text-events --> 
            </div>  
            <!-- / home-squares -->

            <div class="text-app">
                <div>
                    <h2>
                    <?php $titleApp = get_field('title-app') ?>
                    <?php if($titleApp){ _e($titleApp);} ?>
                    </h2>
                </div>
                <div>
                    <?php $textApp = get_field('text-app') ?>
                    <?php if($textApp){ _e($textApp);} ?>
                </div>
                <div class="btn-app">
                    <?php $buttonApp = get_field('button-app') ?>
                        <?php if($buttonApp): 
                            $link_title = $buttonApp['title'];
                            $link_url = $buttonApp['url'];
                        ?>
                        <!-- create the url  -->
                            <div class="button-app upper">
                                <a class="button-link" href="<?php print_r(esc_url($link_url)); ?>">
                                    <?php print_r(esc_html($link_title)); ?>
                                </a>
                            </div>
                        
                        <?php endif; ?>
                </div>
            </div>      
        </div>

        <div class="text-center upper title home-title">
            <h3>Latest from the blog</h3>
        </div>

        <div class="home-blogs flex">
            

            <?php 
                $argsBlog = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $the_blog_query = new WP_Query( $argsBlog );
            ?>
            
            <?php if ($the_blog_query->have_posts() ) : ?>
                <?php while ($the_blog_query->have_posts()) :  $the_blog_query->the_post();?>
                    <div class="blog-card">
                        <div>
                        <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                        </a>
                        </div>
                        <div>
                            <p><?php echo get_the_date(); ?></p>
                            <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>  
                            </a>
                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        
        </div>
        <!-- /home-blogs -->

        <h3 class="upper text-center home-title title">Latest recipes from the farm</h3>

        <div class="produce-content home-recipe text-center max flex">

            <div class="latest-recipe produce-card ">

                <div class="p-img overflow-black">
                    <img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/home-recipe-dragon-fruit-smoothie.jpg">
                </div>
                    
                <div class="p-text produce-card-heading">
                    <h4>Smashing Summer Smoothie</h4>
                </div>

            </div> 
            <!-- /produce-card -->

            <div class="latest-recipe produce-card ">

                <div class="p-img overflow-black">
                    <img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/home-recipes-lychees-green-curry.jpg">
                </div>
                    
                <div class="p-text produce-card-heading">
                    <h4>Chicken & Lychee Green Curry</h4>
                </div>

            </div> 
            <!-- /produce-card -->

            <div class="latest-recipe produce-card ">

                <div class="p-img overflow-black">
                    <img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/home-recipes-custard-apple-icecream.jpg">
                </div>
                    
                <div class="p-text produce-card-heading">
                    <h4>Custard Apple Ice Cream</h4>
                </div>

            </div> 
            <!-- /produce-card -->
        </div>
        <!-- /content -->

</article>

<div class="awards flex">
    <a href="#"><img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/home-winner-certificate-2.png" alt="award"></a>
    <a href="#"> <img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/home-winner-certificate-1.png" alt="award"></a>
    <a href="#"> <img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/home-winner-certificate-3.png" alt="award"></a>
    <a href="#"> <img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/home-winner-certificate-4.png" alt="award"></a>
</div>

<div class="bg-img bg-footer"></div>
<div class="bg-text bg-text-footer text-center upper">
    <img src="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/wp-content/uploads/2020/12/logo-white.png" alt="footer-logo">
   <h3>SHARING THE FRUIT OF THE TROPICS WITH PASSION AND INNOVATION</h3>
   <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/our-story/">
	<button class="button button-home upper" type="submit">
		Discover Our Story
	</button>
  </a>
 </div>
</div>


<!-- *Note: You can add a whole bunch more here such as author, category and or tag links. What you see now is just the starting point.  -->

