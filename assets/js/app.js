var app = angular.module('memo',[]);
app.controller('Controller', function($scope,$http,$interval){
    $scope.respost = {};
    $scope.resrv = function(){
        $http.post('http://localhost/project/reserve/index',$scope.respost)
        .then(function(success){
            $scope.respost = {};
        },function(error){
        });
    }
   $scope.delete = function(id) {
        $http.delete('http://localhost/project/reserve/index',id)
        .then(function(success){
            console.log(success.data);
        },function(error){
            console.log(error.data);
        })
    };
    $scope.get = function(){
        $http.get('http://localhost/project/reserve/index')
        .then(function(success){
            $scope.records = success.data.data;
        },function(error){
        }
        );  
    }
    $interval(function(){$scope.get()},2000);   
     $scope.delete = function(){
        $http.delete('http://localhost/project/reserve/index')
        .then(function(success){
            console.log('Successfully Deleted');
        },function(error){
            console.log('Failed');
        })
    }
})