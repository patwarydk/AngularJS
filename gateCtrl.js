// JavaScript Document
var appGate = angular.module("gateApp", []);
appGate.controller("gateCtrl", function ($scope, $http) {
	/*####gate view start####*/
	$http.post("backend/gate-view.php", {})
	.success(function(data){
		$scope.allData = data;	
	})
	/*####gate view start####*/
	/*####collect data from terminal start####*/
	$http.post("backend/terminal-view.php", {})
	.success(function(data){
		$scope.allgateData = data;	
	})
	/*####collect data from terminal end####*/
	/*####gate insert start####*/
	$scope.gatelInsert = function(){	
		$http.post("backend/gate-insert.php", {
			'name':$scope.name,
			'getid':$scope.getid
		})
		.success(function(data,status,headers,config){
		alert(data);
	});
	}
	/*####gate insert end####*/
	/*####gate delete and refresh start####*/
	
	$scope.delete_gate = function(id){
		$http.post("backend/gate-delete.php", {
			'id':id
		})
		.success(function(data,status,headers,config){	
			$http.post("backend/gate-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})		
			alert(data);
		});
	}
	/*####gate delete and refresh end####*/
		
});
	