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
	
	var pwerr = '<p>Please provide the password in following format:</p>';
		pwerr += '<ul>';
			pwerr += '<li>Minimum 8 characters</li>';
			pwerr += '<li>Minimum 1 number</li>';
			pwerr += '<li>Minimum 1 uppercase letter & 1 lowercase letter </li>';
			pwerr += '<li>Minimum 1 special character</li>';
		pwerr += '</ul>';
	var errors = ['<p>All fields are required.</p>', '<p>Email is invalid.</p>', pwerr, '<p>Password is not same.</p>'];

	$('#btn').click(function() {
		$('#error').html('');
		var errorStatus = [];
		var email = $('#email').val();		
		var user_id = $('#user_id').val();		
		var name = $('#name').val();
		var password = $('#password').val();
		var retype = $('#retype').val();
		var valid = true;
		//console.log(name);
		
		// Field common validation
		if( email == '' || user_id == '' || name == '' || password == '' || retype == '' ) errorStatus.push(0);
				
		// Email validation
		if( false === validateEmail(email) ) errorStatus.push(1);
			
		if( false === validatePassword(password) ) errorStatus.push(2);
		
		// Retype password check
		if( password !== retype ) errorStatus.push(3);
		
		if( errorStatus.length !== 0 ) {
			var i;
			for( i = 0; i < errorStatus.length; i++ ) {
				$('#error').append(errors[errorStatus[i]]);
			}
			
			$('#error').addClass('alert alert-danger');
			
			$('html, body').animate({
				scrollTop: $('#error').offset().top
			});
			
			return false;
		} 
		
		$('#error').removeClass('alert alert-danger');		
		
		return false;
	});
	
});