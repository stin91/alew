  var app = angular.module("myApp");
        app.controller("utentiCtrl", function($scope, $http) {
            $http.get("select.php") 
            .then(function(response) { 
            $scope.content = response.data.details;       
            });
        });
		app.controller("impiantiCtrl", function($scope, $http) {
            $http.get("select1.php") 
            .then(function(response) { 
            $scope.content = response.data.details;       
            });
        });
		app.controller("SensoriCtrl", function($scope, $http) {
            $http.get("select2.php") 
            .then(function(response) { 
            $scope.content = response.data.details;       
            });
        });
		
		