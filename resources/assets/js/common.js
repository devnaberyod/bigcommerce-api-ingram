var user_log_forms = (function(){

	var sign_up_form = $('.signup-form');
	var sign_in_form = $('.login-form');
	var sign_in_btn  = $('.login button');
	var sign_up_btn  = $('.sign-up-btn');

	var showLoginForm = function(){
		sign_in_form.removeClass('hidden');
		sign_up_form.addClass('hidden');
	}

	var showRegisterForm = function(){
		sign_up_form.removeClass('hidden');
		sign_in_form.addClass('hidden');
	}

	sign_in_btn.click(showLoginForm);
	sign_up_btn.click(showRegisterForm);


})();

var checkbox = (function(){

	var checkbox 	  = $('td .checkbox');
	var checkbox_head = $('th .checkbox');

	var toggleCheckbox = function(){
		var element 	   = $(this);
		var checkbox_input = element.prev();
		element.toggleClass('checked');

		if(element.hasClass('checked') == true){
			checkbox_input.attr('checked', true);
			return false;
		}

		checkbox_input.removeAttr('checked');
	}

	var toggleAllCheckbox = function(){
		var element 	   = $(this);
		var checkbox_input = element.prev();

		if(element.hasClass('checked') == true){
			element.removeClass('checked');
			checkbox_input.removeAttr('checked');
			checkbox.removeClass('checked').removeAttr('checked');	
			return false;
		}

		element.addClass('checked');
		checkbox_input.attr('checked', true);
		checkbox.addClass('checked').attr('checked', true);
	}

	checkbox.click(toggleCheckbox);
	checkbox_head.click(toggleAllCheckbox);

})();

var dropdown = (function(){

	var li = $('.sidebar > ul > li');

	var dropdownToggle = function(){
		var element = $(this);
		var ul 		= $(this).children('ul');

		if(ul.length == 0)
			return true; 

		element.toggleClass('clicked');
	}

	li.click(dropdownToggle);

})();

$('form.frm-login').on('submit', function(e) {
	e.preventDefault();
	var data = $(this).serializeArray();
	var email = data[0].value
		password = data[1].value;

	console.log(email, password)

	if('tim.dickinson@cleverlocal.com.au' === email && '12345' === password) {
		window.location.replace("/store-management");
		return;
	}
	
	console.log('Invalid username/password');
	$('div#login-error').fadeIn().fadeOut(3000);
});