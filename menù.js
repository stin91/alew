var app1 = angular.module("myApp", ["ngRoute"]);
app1.config(function($routeProvider) {
    $routeProvider
    .when("/Utenti", {
        templateUrl : "Utenti.html",
         controller : "utentiCtrl"
    })
    .when("/Impianti", {
        templateUrl : "Impianti.html",
         controller : "impiantiCtrl"
    })
    .when("/Sensori", {
        templateUrl : "Sensori.html",
		 controller : "SensoriCtrl" 
    });
});
