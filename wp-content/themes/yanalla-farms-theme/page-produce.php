
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
    <div class="bg-img bg-produce"></div>
        <div class="bg-text bg-text-produce text-center">
            <h1>OUR PRODUCE</h1>
            <h3>Taste the colourful goodness of juicy tropical fruits</h3>
        </div>
    </div>
</header>

<p class="text-center produce-intro max">Think of Queensland sunshine, think of healthy fruit platters or smoothies, discover new dessert creations… When it’s time for exotic deliciousness, Yanalla Farms has premium quality fruit that always lives up to its promise</p>

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
                    <div class="produce-card">
                    <!-- card header -->
                    <div class="overflow-black">
                        <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                    </div>
                    
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

        <div class="produce-page max">
                <?php the_content(); ?>
            </div>

        <!-- display footer -->
<?php get_footer(); ?>