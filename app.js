// Menu

$menu = $('#menu');

$menu.hide();

function openMenu() {
	$menu.fadeIn();
}

function closeMenu() {
	$menu.fadeOut();
}

$menuMap = $('#menuMapa');
function mapaMenu() {
	$menuMap.toggle( "slow", function() {
    	// Animation complete.
 	});
}

//Loadder

$loadder = $('#loader');

function loading() {
	$loadder.fadeIn();
}

function loaded() {
	$loadder.fadeOut("slow");
}

$( document ).ready(function() {
	// Fade Loading
    setTimeout(loaded, 900);

});


//Boton alistamiento 
$btnAlistamiento = $('#alistamientoBtn');
$btnAlistamiento.click(function(){
	loading();
	window.location.href = "?content=alistamiento";
});

//Boton Campamento Base
$campamentoBaseBtn = $('#campamentoBaseBtn');
$campamentoBaseBtn.click(function(){
	loading();
	window.location.href = "?content=base";
});


//Boton Campamento Uno
$campamentoUnoBtn = $('#campamentoUnoBtn');
$campamentoUnoBtn.click(function(){
	loading();
	window.location.href = "?content=uno";
});

//Boton Campamento Dos
$campamentoDosBtn = $('#campamentoDosBtn');
$campamentoDosBtn.click(function(){
	loading();
	window.location.href = "?content=dos";
});