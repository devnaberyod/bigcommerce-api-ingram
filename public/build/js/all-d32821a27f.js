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
angular
    .module('app-ingram')
    .controller('ProductController', ProductController);

ProductController.$inject = ['Restangular'];

function ProductController(Restangular) {
	var vm = this;
	var base = Restangular.all('product');

	vm.all = {};
	vm.brands = {};
	vm.count = Restangular.all('product').customGET("count");
	Restangular.all('product').customGET("brands").then(function(each) {
		vm.brands = each;
	});

	base.getList().then(function(products) {
	 	vm.all = products;
	});
	
	return vm;
}
//# sourceMappingURL=all.js.map
