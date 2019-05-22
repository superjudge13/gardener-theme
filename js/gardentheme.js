//javascript functions

window.onload=function(){
	styleContact();
};

function styleContact(){
	'use strict';
	var windowLoc = $(location).attr('pathname');
	
	if (windowLoc === "/bootstrap/contact/"){
		//alert("WE are on the contact page");
		//add bootstrap classes to inputs
		$( ".wpcf7-text" ).addClass( "form-control" );
		$( ".wpcf7-textarea" ).addClass( "form-control" );
		
		//add bootstrap classes to submit button
		$( ".wpcf7-submit" ).addClass( "btn btn-primary" );
	}
}

//animate the search input when magnifying glass is clicked

var searchClick = false;

$( "#search-button" ).mouseover(function() {
	animateInput();
	if(!window.searchClick){
		//alert('searchClick is false');
		window.searchClick = true;
	}
	else
	{
		//alert('searchClick is true');
		window.searchClick = false;
	}
	//searchClick = true;
});

function animateInput(){
	//add the animation class to the input
	$( '#search-input' ).removeClass( 'search-nav-in' );
	$( '#search-input' ).addClass( 'search-nav-out' );
	//alert('Mouse is OVER');
}