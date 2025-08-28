</main>

<footer class="footer">
    <div class="container">
        <div class="footer__first">
            <div class="footer__copyright">©2023 Yourcompany</div>
            <a class="btn btn-primary" href="#">Purchase now</a>
        </div>
        <div class="footer__second">
            <?php
            wp_nav_menu([
                'theme_location' => 'top',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'footer__menu',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
                'link_class' => 'nav-link px-3 py-2 rounded'
            ]);
            ?>
            <a class="footer__logo" href="/">Landing</a>
            <ul class="footer__social">
                <li>
                    <a href="#">
                        <i class="icon-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-youtube-play"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>



</body>

</html>