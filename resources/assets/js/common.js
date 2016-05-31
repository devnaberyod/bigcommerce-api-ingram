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

var checkbox = (function(){

	var checkbox = $('.checkbox');

	toggleCheckbox = function() {
		var element 	   = $(this);
		var checkbox_input = element.prev();
		element.toggleClass('checked');

		if(element.hasClass('checked') == true) {
			checkbox_input.attr('checked', true);
			return false;
		}

		checkbox_input.removeAttr('checked');
	}

	checkbox.click(toggleCheckbox);

})();

var dropdown = (function(){

	var li = $('.sidebar > ul > li');

	dropdownToggle = function(){
		var element = $(this);
		var ul 		= $(this).children('ul');

		if(ul.length == 0)
			return true; 

		element.toggleClass('clicked');
	}

	li.click(dropdownToggle);

})();