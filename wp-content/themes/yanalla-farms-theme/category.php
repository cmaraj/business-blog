<?php
/*
* Template part for displaying for displaying category types.
* @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#category-php-tag-php-and-taxonomy-php
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
            <h1>Blog</h1>
        </div>
    </div>
</header>

<body>
    <div class="sidebar-category flex">
        <main class="category-info" <?php post_class();?> id="post-<?php the_ID();?>" >

            <?php if(have_posts()) : ?>
                <!-- start the loop -->
                <!-- /** the header of the category page sits in the in the loop, but outside the the while loop section **/ -->
                <div class="category-header">

                    <!-- display h1 heading by setting single_cat_title to true, it will display the category you clicked -->
                    <h2 class="category-title text-center"> <?php single_cat_title( '', true ); ?></h2>

                    <!-- /**display the category description - again this is optional feature. **/ -->
                    <?php if ( category_description() ) : ?>
                        <div class="archive-meta"><?php echo category_description(); ?></div>
                    <?php endif; ?>

                    </div> 
    <div class="all-blog-posts">
        <?php while(have_posts()) : the_post(); ?>

            <div class="blog-post text-center">
                        <div class="p-img">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?></a>
                        </div>
                        <div class="home-cates">
                            <?php the_category(); ?>
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="home-title blog-fix ">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                        </div>
                        <div class="home-p">
                                <?php the_excerpt(); ?>
                        </div>
                        <div>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More ...</a>
                        </div>
                </div>
            <?php endwhile;
            else: ?>
        </div>
            <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            <!-- this would be where you add your right sidebar or widgets -->
        </main>
        <div class="sidebar-right">
                <?php if(is_active_sidebar('sidebar-primary')) : ?>
                    <?php dynamic_sidebar('sidebar-primary');?>
                <?php endif; ?>
        </div>
    </div>
        <?php get_footer(); ?>
</body>