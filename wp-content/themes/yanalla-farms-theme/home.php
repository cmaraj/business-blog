
<?php
/*
* The template is for displaying all blog posts.
*
* @package yanalla farms
* @since 1.0.0
*/ 
//display header
get_header();
?>

<header>
    <div class="bg-img bg-blog"></div>
        <div class="bg-text bg-text-blog text-center">
            <h1>NEWS AND VIEWS FROM YANALLA FARMS</h1>
            <h3>Read more about what’s happening and find fruitful inspiration</h3>
        </div>
    </div>
</header>

<article <?php post_class();?> id="post-<?php the_ID();?>" >
    <div class="sidebar-blog">
        <div class="all-blog-posts">
            <?php if(have_posts()) : //query_posts('posts_per_page=2');?>
            
                <?php while(have_posts()) : the_post(); ?>
                        <!-- display the all of the blog posts -->
                        
                    <div class="blog-post text-center">
                        <div class="p-img">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?></a>
                        </div>
                        <div class="home-cates">
                            <?php the_category(); ?>
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="home-title blog-fix">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                        </div>
                        <div class="home-p">
                                <?php the_excerpt(); ?>
                        </div>
                        <div>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More ...</a>
                        </div>
                    </div>
                        
                    <?php endwhile; ?>
                        
                        <!-- end while loop -->
                <?php else : ?>
                        <?php get_template_part('template-parts/content', 'none'); ?>
                <?php endif; ?>
        </div>
        <!-- /all-blog-posts -->
    </div>

    <div class="text-center all-produce-links">
            <h4 class="upper">
                <?php $titleB = get_field('category-title') ?>
                <?php if($titleB){ _e($titleB);} ?>
                EXPLORE OTHER CATEGORIES
            </h4>
            <div class="flex produce-links">
                <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/category/faqs/" class="text-bold upper">FAQS</a>
                <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/produce/dragon-fruit/" class="text-bold upper">Farm Updates</a>
                <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/category/media/" class="text-bold upper">Media</a>
                <a href="http://cmaraj1.dmitstudent.ca/dmit2032/yanalla-farms/category/events/" class="text-bold upper">Events</a>
            </div>
            
        </div>
</article>
<!-- //display footer -->
<?php get_footer(); ?>