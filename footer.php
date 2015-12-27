<footer class="Footer">

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
	<small><i>© 2016 Edgar Santiago Clavijo. </i></small>
</footer>
<?php include TEMPLATEPATH . '/contact.php' ?>

</body>
</html>