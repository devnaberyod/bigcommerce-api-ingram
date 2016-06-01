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