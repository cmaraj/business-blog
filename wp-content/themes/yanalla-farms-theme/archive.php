<?php
/*
* This is the archive template.
* This is the template that displays a collection of posts, categories, tags or tag cloud(s), author, date, etc…
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
            <h1>Archives</h1>
        </div>
    </header>

    <div class="flex archive-flex"> 
        <div class="list-404-info">
            <h2><?php _e( 'Recent Posts' ); ?></h2>
            <!-- the function below only displays the 10 most recent posts  -->
            <ul>
                <?php wp_get_archives('type=postbypost&limit=10'); ?>
            </ul>
        </div>
        <div class="list-404-info">
            <h2><?php _e( 'Categories' ); ?></h2>
            <?php //wp_list_categories('depth=0'); ?>
            <!-- /** display all top-level categories **/ -->
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
            </ul>
                <!-- //end of wp_list categories -->
        </div>
        <div class="list-404-info">
            <!-- /** display all the monthly archives in a list **/ -->
            <ul>
                <?php
                    the_widget( 'WP_Widget_Archives',
                    array(
                        'orderby' => 'count',
                        'order' => 'DESC',
                        'show_count' => 1,
                        ) //end of array
                    );
                ?> <!-- monthly archives -->
            </ul>

        </div>
    </div>
</body>
<?php get_footer(); ?>