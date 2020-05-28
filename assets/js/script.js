function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function letterChecking(l, password) {
	var i, flag1 = 0, flag2 = 0;
	
	for ( i = 0; i < l; i++ ) {
		if ( flag1 == 0 && password[i] >= 'A' && password[i] <= 'Z' ) flag1 = 1;
		if ( flag2 == 0 && password[i] >= 'a' && password[i] <= 'z' ) flag2 = 1;
		
		if ( flag1 == 1 && flag2 == 1 ) return true;
	}
	
	return false;
}

function numberChecking(l, password) {
	var i;
	
	for ( i = 0; i < l; i++ ) {
		if( password[i] >= 0 && password[i] <= 9 ) return true;
	}
	
	return false;
}

function specialChecking(l, password) {
	var i;
	for ( i = 0; i < l; i++ ) {
		var a = password.charCodeAt(i);
		if( (a >= 32 && a <= 47) || (a >= 58 && a <= 64) || (a >= 91 && a <= 96) || (a >= 123 && a <= 126)) return true;
	}
	return false;
} 

function validatePassword(password) {
	var length = password.length;
	
	if( length > 7 && letterChecking(length, password) && numberChecking(length, password) && specialChecking(length, password) ) return true;
	
	return false;
}

// Initialize

jQuery(document).ready(function($){
	
	/*document.getElementById('btn').addEventListener('click', function(){
		
	});*/

	$('#btn').click(function() {
		
		//var email = document.getElementById('email').value;
		var email = $('#email').val();		
		var user_id = $('#user_id').val();		
		var name = $('#name').val();
		var password = $('#password').val();
		var retype = $('#retype').val();
		var valid = true;
		//console.log(name);
		
		// Field common validation
		if( email == '' || user_id == '' || name == '' || password == '' || retype == '' ) valid = false;
		
		
		// Email validation
		if( false === validateEmail(email) ) valid = false;
			
		// password field validation
		/**
		1. Minimum 8 characters
		2. Minimum 2 letters
		3. Minimum 1 number
		4. Minimum 1 capital letter & 1 small letter
		5. Minimum 1 special character 
		*/
		if( false === validatePassword(password) ) valid = false;
		
		// Retype check
		
		console.log(valid);
		console.log(101);
		
		if( false === valid ) {
			$('#error').html('<p class="alert alert-danger">All fields are required.</p>');
			
			$('html, body').animate({
				scrollTop: $('#error').offset().top
			});
			
			return false;
		}
		
		return false;
	});
	
});