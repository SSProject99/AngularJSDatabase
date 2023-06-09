

var app = angular.module("insertApp", []);
app.controller("insertController", function($scope, $http) {
    $scope.formData = {};
    $scope.submitForm = function () {
        $http.post('insertData.php', $scope.formData)
            .then(function (response) {
                $scope.message = response.data;
                // $scope.displayData();
                console.log(response);
            })
            .catch(function (error) {
                alert("Submission failed!!", error)
            });
    }
});