	<!-- FOOTER B -->
    <section class="footer-b bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
					<?php dynamic_sidebar('footer-a') ?>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
					<?php dynamic_sidebar('footer-b') ?>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
					<?php dynamic_sidebar('footer-c') ?>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
					<?php dynamic_sidebar('footer-d') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark-grey py-4">
        <div class="container">
            <ul class="social-icons list-inline text-center mb-0">
                <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-1x">
                            <i class="fas fa-circle fa-stack-2x text-red fa-stack-red"></i>
                            <i class="fab fa-facebook-f fa-stack-1x text-dark-grey"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-1x">
                            <i class="fas fa-circle fa-stack-2x text-red fa-stack-red"></i>
                            <i class="fab fa-twitter fa-stack-1x text-dark-grey"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-1x">
                            <i class="fas fa-circle fa-stack-2x text-red fa-stack-red"></i>
                            <i class="fab fa-google fa-stack-1x text-dark-grey"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="bg-dark py-3">
        <div class="container">
            <p class="copyrights text-grey text-xs text-center mb-0">&#9400; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
        </div>
    </section>
    <!-- SCROLL TO TOP -->
    <a href="#top" id="to-top" class="scroll-to-top page-scroll">
        <i class="fas fa-arrow-alt-circle-up"></i>
        <!-- <i class="fas fa-caret-square-up"></i> -->
        <!-- <i class="fas fa-chevron-circle-up"></i> -->
    </a>
	<?php wp_footer(); ?> <!-- wordpress include required footer data -->
</body>
</html>