function pass1() {
$( "figure" ).removeClass( "anima anima2 anima3 anima4" ).addClass( "anima1" )
}

function pass2() {
$( "figure" ).removeClass( " " ).addClass( "anima2" )
}

function pass3() {
$( "figure" ).removeClass( " " ).addClass( "anima3" )
}

function pass4() {
$( "figure" ).removeClass( " " ).addClass( "anima4" )
}

function pass() {
$( "figure" ).removeClass( " " ).addClass( "anima" )
}








$( ".number5" ).on( "click", pass4 )
$( ".number1" ).on( "click", pass )
$( ".number2" ).on( "click", pass1 )
$( ".number3" ).on( "click", pass2 )
$( ".number4" ).on( "click", pass3 )