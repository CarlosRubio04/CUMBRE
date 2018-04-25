// Menu

$menu = $('#menu');

$menu.hide();

function openMenu() {
	$menu.fadeIn();
}

function closeMenu() {
	$menu.fadeOut();
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
