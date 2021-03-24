<?php
/***
* The template for displaying search results
*
* @package yanalla farms
* @since 1.0.0
*/
//display header
get_header();
?>
<body>
<header class="bg-img bg-archive">
        <div class="bg-text bg-text-archive">
            <h1>Search Results</h1>
        </div>
    </header>
    <div class="sidebar-search">
        <div class="site-main search-main" id="main">
            <?php if(have_posts()) : ?>
                <div>
                    <h1 class="search-result text-center">
                        <?php printf(
                        esc_html__( 'YOU SEARCHED FOR: %s', 'design+code'),
                        '<span>' . get_search_query() . '</span>'
                        ); ?>
                    </h1>
                </div>
        <!-- start loop -->
        <?php while(have_posts()) : the_post(); ?>
        <!-- //do things -- display content : the function below will pull the content from the template partial. -->
        <?php get_template_part( 'template-parts/content', 'search' ); ?>
        <?php endwhile; ?>
        <!-- end while loop  -->
        <?php else : ?>
        <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
        <?php get_template_part('template-parts/content', 'none'); ?>
        <h2>No search results found</h2>
        <?php get_search_form(); 
        get_template_part( 'template-parts/content', 'search' );?>
        <?php endif; ?>
        <!-- This is where you would add pagination. Pagination in a search result page is smart idea, especially if your search
        returns a lot of results.-->
        </div>
        <div class="sidebar-right">
                    <?php if(is_active_sidebar('sidebar-primary')) : ?>
                        <?php dynamic_sidebar('sidebar-primary');?>
                    <?php endif; ?>
        </div>
    </div>
    
</body>
<!-- //display footer -->
<?php get_footer();?>