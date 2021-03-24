<?php 

/* *
 *The template part contain the footer widget codepress_footer_js( )
 * 
 * @package yanalla farms
 * 
 */

 ?>
<!-- this actually displays your widget -->
<div class="footer-all">
        <div class="footer-component footer-top text-center">
            <?php if(is_active_sidebar('footer-top')) : ?>
                <?php dynamic_sidebar('footer-top');?>
            <?php endif; ?>
        </div>

    <div class="footer-widgets">
        <div class="footer-component footer-insde-top flex">
            <?php if(is_active_sidebar('footer-insde-top')) : ?>
                <?php dynamic_sidebar('footer-insde-top');?>
            <?php endif; ?>
        </div>

        <div class="footer-lists flex">
            <div class="footer-component footer-left">
                <?php if(is_active_sidebar('footer-left')) : ?>
                    <?php dynamic_sidebar('footer-left');?>
                <?php endif; ?>
            </div>

            <div class="footer-component footer-middle">
                <?php if(is_active_sidebar('footer-middle')) : ?>
                    <?php dynamic_sidebar('footer-middle');?>
                <?php endif; ?>
            </div>

            <div class="footer-component footer-right">
                <?php if(is_active_sidebar('footer-right')) : ?>
                    <?php dynamic_sidebar('footer-right');?>
                <?php endif; ?>
            </div>
        </div> 
        <!-- /footer-list -->

        <div class="footer-component footer-inside-bottom">
            <?php if(is_active_sidebar('footer-inside-bottom')) : ?>
                <?php dynamic_sidebar('footer-inside-bottom');?>
            <?php endif; ?>
        </div>
    </div>
    <!-- /footer-widgets  -->
        <div class="footer-component footer-bottom text-center">
            <?php if(is_active_sidebar('footer-bottom')) : ?>
                <?php dynamic_sidebar('footer-bottom');?>
            <?php endif; ?>
        </div>
</div>
<!-- /footer-all -->

<!-- just copy and paste this php block and change ID 'footer-col-one' -->