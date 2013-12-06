var km_app = angular.module('kmApp', []);
 
console.log('yes123');
 
km_app.controller('KMController', function ($scope) {
	console.log('yes');
	$scope.do_it = function() { alert(' test'); };
	
	$scope.test = "asdf";
});