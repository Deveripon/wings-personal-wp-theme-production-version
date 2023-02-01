    <?php global $devripon;  ?>
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer_sidebar') ?>

            </div>
        </div>
    </section>
    <!-- copyright section -->
    <section class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <?php echo $devripon['copyright']  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- copyright section -->
    <!-- scroll top button -->
    <a class="scroll_top" href="index.html"><i class="fa-solid fa-arrow-up"></i></a>

    <!-- scroll top button -->
    <?php wp_footer() ?>
    </body>

    </html>