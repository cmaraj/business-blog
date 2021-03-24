<?php
/***
* The template for displaying a 404 page.
*
* @package yanalla farms
* @since 1.0.0
*/
//display header
get_header();
?>
<main class="site-main" id="main">
    <section class="error-404 not-found">
    <header class="bg-img bg-archive">
        <div class="bg-text bg-text-404">
            <h1>Oh dingleberries</h1>
            <h3>Sorry about that, we couldn't find what you were looking for</h3>
        </div>
    </header>
        <div class="page-content">
            <div class="message-404 max text-center">
                <p>
                <?php esc_html_e( "Sorry! We can’t seem to find the you were looking for. Please check that you typed your address correctly, go back to the previous page, try using the search to find something specific or the links below."); ?>
                </p>
                <!-- display the search form -->
                <?php get_search_form(); ?>
            </div>      
            <div class="flex archive-flex">
                <!-- recent posts -->
                <div class="list-404-info"><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></div>
                <!-- display categories -->
                    <div class="widget widget_categories list-404-info">
                        <h2 class="widget-title">
                            <?php esc_html_e( 'Categories', 'theme name here' ); ?>
                        </h2>
                        <ul>
                            <?php wp_list_categories(
                            array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'show_count' => 1,
                            'title_li' => '',
                            'number' => 10,
                            ) //end of array
                            ); ?> 
                            <!-- //end of wp_list categories -->
                        </ul>
                    </div>
                <div class="list-404-info">
                    <?php
                        the_widget( 'WP_Widget_Archives',
                        array(
                        'orderby' => 'count',
                        'order' => 'DESC',
                        'show_count' => 1,
                        ) //end of array
                        );
                        ?> 
                        <!-- monthly archives -->
                </div>
            </div>
        </div> <!-- //page content -->
    </section>
</main>

    

<?php get_footer(); ?>