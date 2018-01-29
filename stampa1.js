 var app2 = angular.module("myApp");
        app.controller("selectController", function($scope, $http) {
            $http.get("select1.php") 
            .then(function(response) { 
            $scope.content = response.data.details;       
            });
        });