        <footer class='bg-light'>
            <nav class="container">
                <?php
                    $args = array(
                        'theme_location' => 'secondary',
                        'menu_class' => '',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 1,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    );
                    wp_nav_menu($args);
                ?>
            </nav>
        </footer>

        <?php wp_footer();?>
    </body>
</html>