<?php
/*
* Template part for displaying content in the front-page.php
* (for secondary contact pages)
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package yanalla farms
* @since 1.0.0
*/
?>
<!-- part 1 -->
<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="page-content">
        <!-- display page or post content -->
        <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard
        ?>
    </div>
    
</article>

