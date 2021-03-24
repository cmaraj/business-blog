<?php
/***
* Template part for displaying content in the search.php
*
* @package yanalla
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
<!-- entry header  -->
    <div class="search-item text-center">
        <!-- get the page title -->
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h2>'); ?>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="post-meta-area">
                        <?php echo get_the_date(); ?> 
                    <?php
                    if( has_category() ){
                    //display the category
                    the_category();
                    }
                    ?>
                </div>
            <?php endif; ?>

            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
    </div>
        
</article>

