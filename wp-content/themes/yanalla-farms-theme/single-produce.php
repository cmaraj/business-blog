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

<?php if(have_posts()) : ?>
    <!-- start the loop -->
    <?php while(have_posts()) : the_post(); ?>
            <?php
            //do things -- display content : the function below will pull the content from the template partial.
            get_template_part( 'template-parts/content', 'produce' );
            ?>
        <?php endwhile; ?>
        <!-- end while loop -->
        <?php else : ?>
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
            <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
    
    <!-- display sidebar -->
    <?php //dynamic_sidebar('sidebar-primary'); ?> 
    
    <!-- display footer -->
<?php get_footer(); ?>