<?php
/***
* The template for displaying search forms. Code borrowed from Understrap Theme (https://understrap.com/)
*
* @package yanalla farms
* @since 1.0.0
*/
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?> "role="search">
    <!-- <label class="sr-only" for="s"><?php //esc_html_e( 'Search', 'yanalla' ); ?></label> -->
        <div class="input-group search-input">
            <input class="field form-control search-bar" id="s" name="s" type="text"
            placeholder="<?php esc_attr_e( 'Searching for?', 'yanalla' ); ?>" value="<?php the_search_query(); ?>">
            <span class="input-group-append search-btn-span">
                <input class="submit btn btn-primary search-btn" id="searchsubmit" name="submit" type="submit"
                value="<?php esc_attr_e( 'SEARCH', 'yanalla' ); ?>">
            </span>
        </div>
</form>