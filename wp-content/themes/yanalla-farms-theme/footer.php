<?php
/*
* The footer for our theme
* Contains the closing tag for the main container section (i.e. <div class="main-content") and all of the footer content.
*
*@package yanall farms
* @since 1.0.0
*/
?>
        </div>
<!-- closing tag for site-content"> in the header.php -->
        <footer>
                <div class="all-footer-content">
                        <?php get_template_part('template-parts/sidebar-footer', 'footer');?>
                </div>
                <a id="up">Top &#8593</a>
        </footer>
    <?php wp_footer(); ?>

    <div class="footer-bottom text-center">
	<div>
        <a href="#">Terms & Conditions</a>
        <a href="#">Privacy Policy</a>
	</div>
        <div>
                <p class="footer-p"> © Copyright 2020 Yanalla Farms Pty Ltd</p>
                <a href="#">Site by Cameron Maraj | NAIT: For Academic Purposes</a>
        </div>
        
</div>
    </body>
</html>