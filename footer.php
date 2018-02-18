    
    </div><!-- #content -->

    <footer id="footer">

        <div class="container">

        	<div class="row">

                <div class="col-sm-6">
                    
                    <?php get_search_form(); ?>

                </div>

        		<div class="col-sm-6">

            		<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>

				</div>

			</div>

        </div>

    </footer>

    <?php wp_footer(); ?>

    <?php get_template_part( 'partials/analytics', 'footer' ); ?>

</body>
</html>