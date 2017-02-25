// JavaScript Document
var appRegister = angular.module("registerApp", []);
appRegister.controller("registerCtrl", function ($scope, $http) {
	$http.post("backend/register-view.php", {})
	.success(function(data){
		$scope.allData = data;		
	})
	
	$scope.delete_register = function(id){
		$http.post("backend/register-delete.php", {
			'id':id
		})
		.success(function(data,status,headers,config){	
			$http.post("backend/register-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})		
			alert(data);
		});
	}
	
	$scope.registration = function(){
		$http.post("backend/register-insert.php", {
			'fname':$scope.fname,
			'lname':$scope.lname,
			'email':$scope.email,
			'pass':$scope.pass,
			'addr':$scope.addr,
			'con':$scope.con
		})
		.success(function(data,status,headers,config){
			$http.post("backend/register-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})
			alert(data);
		});
	}
});