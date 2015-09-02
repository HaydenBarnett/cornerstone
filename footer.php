    
    </div><!-- #content -->

    <footer class="clearfix">

        <div class="container">

        	<div class="row">

                <div class="col-sm-6">
                    <?php get_search_form(); ?>
                    <nav id="footer-menu">
                        <?php primary_menu(); ?>
                    </nav>
                </div>

        		<div class="col-sm-6">

            		<p class="animated fadeIn">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>

				</div>

			</div>

        </div>

    </footer>

    <?php wp_footer(); ?>

</body>
</html>
