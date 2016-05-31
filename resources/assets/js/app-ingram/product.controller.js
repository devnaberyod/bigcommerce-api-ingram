angular
    .module('app-ingram')
    .controller('ProductController', ProductController);

ProductController.$inject = ['Restangular'];

function ProductController(Restangular) {
	var vm = this;
	var base = Restangular.all('product');

	vm.all = {};
	vm.count = Restangular.all('product').customGET("count");
	

	base.getList().then(function(products) {
	 	vm.all = products;
	 	console.log("count:", vm.count.$$state);
	});
	
	return vm;
}