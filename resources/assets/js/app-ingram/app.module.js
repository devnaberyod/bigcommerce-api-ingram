angular
    .module('app-ingram', ['restangular'])
    .config(config)
    .directive('debug', debug)
    .filter('toString', toString);

function toString() {
	return function(val) {
		console.log('filter val:', val);
		if (typeof(val) === 'object') {
			
		}

		return val;
	}
}

function debug($compile) {
	return {
	       terminal: true,
	       priority: 1000000,
	       link: function (scope, element) {
	           var clone = element.clone();
	           element.attr("style", "color:red");
	           clone.removeAttr("debug");
	           var clonedElement = $compile(clone)(scope);
	           element.after(clonedElement);
	       }
	   }
}

function config(RestangularProvider) {
	RestangularProvider.setBaseUrl('/im/v1');
}