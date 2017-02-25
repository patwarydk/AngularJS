// JavaScript Document
var appAirport = angular.module("airportApp", []);
appAirport.controller("airportCtrl", function ($scope, $http) {
	/*####airplanes view start####*/
	$http.post("backend/airport-view.php", {})
	.success(function(data){
		$scope.allData = data;	
	})
	/*####airplanes view end####*/	
	/*####airplanes insert start####*/
	$scope.airportInsert = function(){
		$http.post("backend/airport-insert.php", {
			'name':$scope.name
		})
		.success(function(data,status,headers,config){
			$http.post("backend/airport-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;
		});
		alert(data);
	});
	}
	/*####airplanes insert end####*/
	/*####airplanes delete start####*/
	
	$scope.delete_airport = function(id){
		$http.post("backend/airport-delete.php", {
			'id':id
		})
		.success(function(data,status,headers,config){	
			$http.post("backend/airport-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})		
			alert(data);
		});
	}
	/*####airplanes delete end####*/
});
	