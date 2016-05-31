var user_log_forms = (function(){

	var sign_up_form = $('.signup-form');
	var sign_in_form = $('.login-form');
	var sign_in_btn  = $('.login button');
	var sign_up_btn  = $('.sign-up-btn');

	var showLoginForm = function() {
		sign_in_form.removeClass('hidden');
		sign_up_form.addClass('hidden');
	}

	var showRegisterForm = function() {
		sign_up_form.removeClass('hidden');
		sign_in_form.addClass('hidden');
	}

	sign_in_btn.click(showLoginForm);
	sign_up_btn.click(showRegisterForm);


})();