var app =  angular.module('main-App',['ngRoute']);
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
	        when('/', {
	            templateUrl: 'app/templates/habito.html',
	            controller: 'PostController'
	        });
}]);