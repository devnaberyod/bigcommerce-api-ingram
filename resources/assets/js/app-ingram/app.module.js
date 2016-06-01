angular
    .module('app-ingram', ['restangular'])
    .config(config)
    .directive('debug', debug)
    .filter('firstArrayValue', firstArrayValue);

function firstArrayValue() {
	return function(val) {
		return val[0];
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

function config(RestangularProvider, $interpolateProvider) {
	RestangularProvider.setBaseUrl('/im/v1');
	$interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}