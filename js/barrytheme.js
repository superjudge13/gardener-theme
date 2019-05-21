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