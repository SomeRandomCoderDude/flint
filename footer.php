<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="site-footer d-flex justify-content-center">
    <div class="footer-content d-flex flex-column">
        <div class="custom-padding d-flex justify-content-between align-content-center ">
            <h2 class="heading-blue">Become a reseller of YubiKeys</h2>
            <button hre="/contact" class="contact-now-btn">Contact us now</button>
        </div>
        <hr>
        <div class="footer-horizonal-container">
            <div class="footer-left">
                <a href="<?php echo home_url(); ?>" class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Footer Logo">
                </a>
                <p class="paragraph-text">
                    At Kernel Afrika, we are experts in cyber security, and through our association with global
                    partners, we
                    offer you the newest technology in cyber security products and services
                </p>

            </div>
            <div class="footer-right d-flex justify-content-between w-100">
                <div class="single-container d-flex">
                    <h4>About</h4>
                    <div class="footer-links">
                        <ul>
                            <li>
                                <a>
                                    Our competition
                                </a>
                            </li>
                            <li>
                                <a>
                                    Channels
                                </a>
                            </li>
                            <li>
                                <a>
                                    Scale
                                </a>
                            </li>
                            <li>
                                <a>
                                    Watch the Demo
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-container d-flex">
                    <h4>Products</h4>
                    <div class="footer-links">
                        <ul>
                            <li>
                                <a>
                                    Energy Logserver
                                </a>
                            </li>
                            <li>
                                <a>
                                    Yubico
                                </a>
                            </li>
                            <li>
                                <a>
                                    Elcomsoft </a>
                            </li>
                            <li>
                                <a>
                                    Fudo
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-container d-flex">
                    <h4>Resources</h4>
                    <div class="footer-links">
                        <ul>
                            <li>
                                <a>
                                    Partners
                                </a>
                            </li>
                            <li>
                                <a>
                                    Developers
                                </a>
                            </li>
                            <li>
                                <a>
                                    Community
                                </a>
                            </li>
                            <li>
                                <a>
                                    Security
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="single-container d-flex">
                    <h4>Addresses</h4>
                    <div class="footer-links">
                        <ul>
                            <li>
                                <a>
                                    South Africa
                                </a>
                            </li>
                            <li>
                                <a>
                                    United Arab Emirates
                                </a>
                            </li>
                            <li>
                                <a>
                                    Ukraine
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <hr>
        <div class="footer-copyright d-flex justify-content-between">
            <p>
                <a href="https://www.kernelafrika.com" target="_blank" style="color: #1a7fa8;">Kernel Afrika</a>
                <span style="color: #A5ACBA;">&copy; <?php echo date('Y'); ?>. Copyright Reserved.</span>
            </p>

            <a href="<?php echo home_url(); ?>" class="rating">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rating.png" alt="rating">
            </a>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>