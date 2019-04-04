<div class="block block-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php include locate_template('partials/components/logo.php'); ?>
                <nav id="primary-menu">
                    <?php primary_menu(); ?>
                </nav>
                <?php include locate_template('partials/components/hamburger.php'); ?>
            </div>
        </div>
    </div>
    <nav id="mobile-menu">
        <?php primary_menu(); ?>
    </nav>
</div>