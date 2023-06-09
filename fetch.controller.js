

var app = angular.module("fetchApp", []);
app.controller("fetchController", function ($scope, $http) {
    $scope.users = [];
    $scope.displayData = function () {
        $http.get('fetchData.php')
            .then(function (response) {
                $scope.users = response.data;
            })
            .catch(function (error) {
                alert("Fetching failed!!", error)
            });
    }
});