<section class="contact">
	<form action="<?php bloginfo('template_url'); ?>/cont.php" method="post" class="contact-form">
		 	<input id="nombre"  class="form-input" type="text" name="nombre" required="" placeholder="nombre"  />
		 	<br>
			<input id="email" class="form-input" type="email" name="email" required="" placeholder="e-mail"/>
			<br>
			<textarea id="mensaje" class="form-textarea" name="mensaje" required="" placeholder="mensaje"></textarea>
			<br>
			<input id="submit" class="form-input" type="submit" name="submit" value="Enviar" />
		</form>
		<button class="contact-close">CERRAR VENTANA</button>
	<!-- <form action="" class="contact-form">	 -->
	<!-- </form>	 -->
</section>
<script>
	function openContact () {    
	    $('.contact').fadeIn(2000);
	};

	function closeContact () {    
	    $('.contact').fadeOut(2000);
	};

	$('.Header-contact, .Footer-contact').click( openContact );

	$('.contact-close').click( closeContact );
</script>