<footer class="Footer">
    <div class="Footer-top">
        <aside class="Footer-social">
            <ul>
                <li class="Footer-google"><a href=""><img src="http://localhost/fina/wp-content/uploads/sites/3/2015/12/google.png" alt=""></a></li>
                <li class="Footer-facebook"><a href=""><img src="http://localhost/fina/wp-content/uploads/sites/3/2015/12/facebook.png" alt=""></a></li>
                <li class="Footer-twitter"><a href=""><img src="http://localhost/fina/wp-content/uploads/sites/3/2015/12/twitter.png" alt=""></a></li>
                <li class="Footer-instagram"><a href=""><img src="http://localhost/fina/wp-content/uploads/sites/3/2015/12/instagram.png" alt=""></a></li>
                <li class="Footer-youtube"><a href=""><img src="http://localhost/fina/wp-content/uploads/sites/3/2015/12/youtube.png" alt=""></a></li>
            </ul>
        </aside>
        <aside class="Footer-subscribe">
            <div class="Footer-form">
                <input type="text" placeholder="e-mail">
                <input type="submit" value="subscribe">
            </div>

        </aside>
        <aside class="Footer-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer',
                        'container'       => 'nav',
                        'container_class' => 'Footer-nav',
                        'menu_class'      => 'Footer-list'
                        )
                    );
             ?>
        </aside>
    </div>
    <div class="Footer-bottom">
        <small><i>© 2016 Auvi Theme - Agustín Palmieri. </i></small>
    </div>
</footer>