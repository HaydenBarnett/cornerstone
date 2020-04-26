<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="footer-logo mb-xs">
                    <?php include locate_template('partials/components/logo.php'); ?>
                </div>
                <p><?php bloginfo('description'); ?></p>
            </div>
            <div class="col-sm-6">
                <?php include locate_template('partials/components/nav-footer.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y');?></p>
            </div>
        </div>
    </div>
</div>