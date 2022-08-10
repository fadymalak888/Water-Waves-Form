/* global $ ,alert, console */
$(function () {
	
	'use strict';
	
	var userError = true , 
		emailError = true ,
		mesError = true ; 

	$('.username').blur(function () {
		if ( $(this).val().length < 4 ){
			$(this).parent().find('.custom').fadeIn(300);
			$(this).css('border' , '1px solid #F00'); 

		}
		else {
			$(this).parent().find('.custom').fadeOut(200);
			$(this).css('border' , '1px solid #0e5aa7');
			userError = false ; 
		}

	});
	
	$('.email').blur(function () {
		if ( $(this).val() === ''){
			$(this).parent().find('.custom').fadeIn(300);
			$(this).css('border' , '1px solid #F00');
			emailError = true ;
		}
		else {
			$(this).parent().find('.custom').fadeOut(200);
			$(this).css('border' , '1px solid #0e5aa7');
			emailError = false ;
		}

		
	});
	
		$('.message').blur(function () {
		if ( $(this).val().length < 10 ){
			$(this).parent().find('.custom').fadeIn(300);
			$(this).css('border' , '1px solid #F00');

		}
		else {
			$(this).parent().find('.custom').fadeOut(200);
			$(this).css('border' , '1px solid #0e5aa7 !important');
			mesError = false ;
		}

		});
	
	//submit form valdation 
	$('.contact-form').submit(function (e) {
		
		if (userError === true || emailError === true || mesError === true){
			$('.username , .email , .message').blur() ;
				e.preventDefault();
		}else{

		}
		
	});
});