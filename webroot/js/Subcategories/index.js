var app = angular.module('app', []);

app.controller('SubcategoryCRUDCtrl', ['$scope', 'SubcategoryCRUDService', function ($scope, SubcategoryCRUDService) {

        $scope.updateSubcategory = function () {
            SubcategoryCRUDService.updateSubcategory($scope.subcategory.id, $scope.subcategory.name, $scope.subcategory.category_id)
                    .then(function success(response) {
                        $scope.message = 'Subcategory data updated!';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error updating subcategory!';
                                $scope.message = '';
                            });
        }

        $scope.getSubcategory = function () {
            var id = $scope.subcategory.id;
            SubcategoryCRUDService.getSubcategory($scope.subcategory.id)
                    .then(function success(response) {
                        $scope.subcategory = response.data.data;
                        $scope.subcategory.id = id;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                if (response.status === 404) {
                                    $scope.errorMessage = 'Subcategory not found!';
                                } else {
                                    $scope.errorMessage = "Error getting subcategory!";
                                }
                            });
        }

        $scope.addSubcategory = function () {
            if ($scope.subcategory != null && $scope.subcategory.name) {
                SubcategoryCRUDService.addSubcategory($scope.subcategory.name, $scope.subcategory.category_id)
                        .then(function success(response) {
                            $scope.message = 'Subcategory added!';
                            $scope.errorMessage = '';
                        },
                                function error(response) {
                                    $scope.errorMessage = 'Error adding Subcategory!';
                                    $scope.message = '';
                                });
            } else {
                $scope.errorMessage = 'Please enter a name!';
                $scope.message = '';
            }
        }

        $scope.deleteSubcategory = function () {
            SubcategoryCRUDService.deleteSubcategory($scope.subcategory.id)
                    .then(function success(response) {
                        $scope.message = 'Subcategory deleted!';
                        $scope.subcategory = null;
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error deleting subcategory!';
                                $scope.message = '';
                            })
        }

        $scope.getAllSubcategories = function () {
            SubcategoryCRUDService.getAllSubcategories()
                    .then(function success(response) {
                        $scope.subcategories = response.data.data;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                $scope.errorMessage = 'Error getting subcategories!';
                            });
        }

    }]);

app.service('SubcategoryCRUDService', ['$http', function ($http) {

        this.getSubcategory = function getSubcategory(subcategoryId) {
            return $http({
                method: 'GET',
                url: urlToRestApi + '/' + subcategoryId,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.addSubcategory = function addSubcategory(name, category_id) {
            return $http({
                method: 'POST',
                url: urlToRestApi,
                data: {name: name, category_id: category_id},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.deleteSubcategory = function deleteSubcategory(id) {
            return $http({
                method: 'DELETE',
                url: urlToRestApi + '/' + id,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.updateSubcategory = function updateSubcategory(id, name, category_id) {
            return $http({
                method: 'PATCH',
                url: urlToRestApi + '/' + id,
                data: {name: name, category_id: category_id},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.getAllSubcategories = function getAllSubcategories() {
            return $http({
                method: 'GET',
                url: urlToRestApi,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

    }]);


