<sction class="Slider">	
	<div class="Slider-content">				
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>
			<?php the_post_thumbnail('my-size'); ?>
		

		<?php endwhile; ?>
		<?php endif; ?>	
		<div class="arrows left2">
			<span class="number1 arrow">></span>
			<span class="number2 ">></span>
			<span class="number3 arrow">></span>
			<!-- <span class="number4 arrow">></span>
			<span class="number5 arrow">></span> -->
		</div>


	</div>	
	<?php include TEMPLATEPATH . '/slider-footer.php' ?>

	<!-- <h5 class"ley">hola que poquitos</h5> -->

	<!-- <span class="number1 arrow">></span>
	<span class="number2">></span>
	<span class="number3 arrow">></span>
	<span class="number4 arrow">></span>
	<span class="number5 arrow">></span>
 -->
</section>		

	


<script>



function pass1() {
$( ".Slider-content" ).removeClass( "anima2 anima3" ).addClass( "anima1" )
$( ".number1" ).removeClass( "" ).addClass( "arrow" )
$( ".number2" ).removeClass( "arrow" ).addClass( " " )
$( ".arrows" ).removeClass( "left1" ).addClass( "left2" )
$( ".FooterSlider-description3" ).removeClass( " " ).addClass( "u-displayNone" )
$( ".FooterSlider-description1" ).removeClass( "u-displayNone" ).addClass( " " )


}
function pass2() {
$( ".Slider-content" ).removeClass( "anima1 anima3" ).addClass( "anima2" )
$( ".number2" ).removeClass( " " ).addClass( "arrow" )
$( ".number3" ).removeClass( "arrow" ).addClass( " " )
$( ".arrows" ).removeClass( "left2" ).addClass( "left3" )
$( ".FooterSlider-description1" ).removeClass( " " ).addClass( "u-displayNone" )
$( ".FooterSlider-description2" ).removeClass( "u-displayNone" ).addClass( " " )

}

function pass3() {
$( ".Slider-content" ).removeClass( "anima1 anima2" ).addClass( "anima3" )
$( ".number3" ).removeClass( " " ).addClass( "arrow" )
$( ".number1" ).removeClass( "arrow" ).addClass( " " )
$( ".arrows" ).removeClass( "left3" ).addClass( "left1" )
$( ".FooterSlider-description2" ).removeClass( " " ).addClass( "u-displayNone" )
$( ".FooterSlider-description3" ).removeClass( "u-displayNone" ).addClass( " " )


}

// function pass4() {
// $( ".Slider-content" ).removeClass( "anima1 anima2 anima3 anima5" ).addClass( "anima4" )
// $( ".number4" ).removeClass( " " ).addClass( "arrow" )
// $( ".number5" ).removeClass( "arrow" ).addClass( " " )
// $( ".arrows" ).removeClass( "left4" ).addClass( "left5" )
// $( ".FooterSlider-description3" ).removeClass( " " ).addClass( "u-displayNone" )
// $( ".FooterSlider-description4" ).removeClass( "u-displayNone" ).addClass( " " )


// }

// function pass5() {
// $( ".Slider-content" ).removeClass( " " ).addClass( "anima5" )
// $( ".number5" ).removeClass( " " ).addClass( "arrow" )
// $( ".number1" ).removeClass( "arrow" ).addClass( " " )
// $( ".arrows" ).removeClass( "left5" ).addClass( "left1" )
// $( ".FooterSlider-description4" ).removeClass( " " ).addClass( "u-displayNone" )
// $( ".FooterSlider-description5" ).removeClass( "u-displayNone" ).addClass( " " )



// }


$( ".number1" ).on( "click", pass1 )
$( ".number2" ).on( "click", pass2 )
$( ".number3" ).on( "click", pass3 )
// $( ".number4" ).on( "click", pass4 )
// $( ".number5" ).on( "click", pass5 )

</script>