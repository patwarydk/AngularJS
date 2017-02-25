// JavaScript Document
/*####flight view start####*/
var appflight = angular.module("flighttApp", []);
appflight.controller("flightCtrl", function ($scope, $http) {
	$http.post("backend/flight-view.php", {})
	.success(function(data){
		$scope.allData = data;	
	})
	/*####flight view start####*/
	/*####collect data from airline start####*/
	$http.post("backend/airlines-view.php", {})
	.success(function(data){
		$scope.allAirlineData = data;	
	})
	/*####collect data from airline end####*/
	/*####flight insert start####*/
	$scope.flightInsert = function(){	
		$http.post("backend/flight-insert.php", {
			'name':$scope.name,
			'flightid':$scope.flightid
		})
		.success(function(data,status,headers,config){
		alert(data);
	});
	}
	/*####flight insert end####*/
	/*####flight delete and refresh start####*/
	
	$scope.delete_flight = function(id){
		$http.post("backend/flight-delete.php", {
			'id':id
		})
		.success(function(data,status,headers,config){	
			$http.post("backend/flight-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})		
			alert(data);
		});
	}
	/*####flight delete and refresh end####*/
		
});
	