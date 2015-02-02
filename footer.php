            </div>

            <footer>
                <div class="container">
                    <p>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?></p>
                </div>
            </footer>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>(window.jQuery)||document.write('<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.js"><\/script>')</script>
		<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/functions.js"></script>

		<?php wp_footer(); ?>

	</body>
</html>
