// JavaScript Document
var appAirlines = angular.module("airlinesApp", []);
appAirlines.controller("airlinesCtrl", function ($scope, $http) {
	/*####airplanes view start####*/
	$http.post("backend/airlines-view.php", {})
	.success(function(data){
		$scope.allData = data;	
	})
	/*####airplanes view end####*/	
	/*####airplanes insert start####*/
	$scope.airlineInsert = function(){
		$http.post("backend/airlines-insert.php", {
			'name':$scope.name
		})
		.success(function(data,status,headers,config){
			$http.post("backend/airlines-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;
		});
		alert(data);
	});
	}
	/*####airplanes insert end####*/
	/*####airplanes delete start####*/
	
	$scope.delete_airlines = function(id){
		$http.post("backend/airlines-delete.php", {
			'id':id
		})
		.success(function(data,status,headers,config){	
			$http.post("backend/airlines-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})		
			alert(data);
		});
	}
	/*####airplanes delete end####*/
});
	