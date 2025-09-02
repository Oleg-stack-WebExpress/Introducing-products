</main>

<footer class="footer">
    <div class="container">
        <!-- Первая строка -->
        <div class="footer__first">
            <div class="footer__row">
                <div class="footer__col footer__col--copyright">
                    <div class="footer__copyright">©2023 Yourcompany</div>
                </div>
                <div class="footer__col footer__col--button">
                    <a class="btn btn-primary footer__btn" href="#">Purchase now</a>
                </div>
            </div>
        </div>
        
        <!-- Вторая строка -->
        <div class="footer__second">
            <div class="footer__row">
                <div class="footer__col footer__col--menu">
                    <div class="footer__menu-wrapper">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'top',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'footer__menu',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                            'link_class' => 'nav-link'
                        ]);
                        ?>
                    </div>
                </div>
                <div class="footer__col footer__col--logo">
                    <a class="footer__logo" href="/">Landing</a>
                </div>
                <div class="footer__col footer__col--social">
                    <ul class="footer__social">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>



</body>

</html>