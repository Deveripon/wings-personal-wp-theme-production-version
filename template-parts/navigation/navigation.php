    <?php global $devripon; ?>
    <section class="navigation-section sticky-top">
        <nav class=" navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="branding navbar-brand">
                    <a href="<?php echo home_url()?>"><img style="width: 250px"
                            src="<?php echo $devripon['logo_upload']['url']?>" alt=""></a>

                </div>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarNavDropdown"
                    style="justify-content: end">

                    <?php wp_nav_menu([
                            'theme_location' => 'primary',
                            'container' => 'false',
                            'menu_class' => 'navbar-nav',
                            'depth' => 2,
                            'fallback_cb' => 'bs4navwalker::fallback',
                            'walker' => new bs4navwalker()

                        ])  ?>

                </div>
            </div>
        </nav>
    </section>