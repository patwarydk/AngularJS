// JavaScript Document
var appDetails = angular.module("detailsApp", []);
appDetails.controller("detailsCtrl", function ($scope, $http) {
	/*####Details view start####*/
	$http.post("backend/details-view.php", {})
	.success(function(data){
		$scope.allData = data;	
	})
	/*####Details view start####*/
	/*####collect data from flight start####*/
	$http.post("backend/flight-view.php", {})
	.success(function(data){
		$scope.flightData = data;	
	})
	/*####collect data from flight end####*/
	/*####collect data from airport start####*/
	$http.post("backend/airport-view.php", {})
	.success(function(data){
		$scope.departureData = data;	
	})
	/*####collect data from airport end####*/
	/*####collect data from airport start####*/
	$http.post("backend/airport-view.php", {})
	.success(function(data){
		$scope.presentData = data;	
	})
	/*####collect data from airport end####*/
	/*####collect data from airport start####*/
	$http.post("backend/airport-view.php", {})
	.success(function(data){
		$scope.destinationData = data;	
	})
	/*####collect data from airport end####*/
	/*####collect data from terminal start####*/
	$http.post("backend/terminal-view.php", {})
	.success(function(data){
		$scope.terminalData = data;	
	})
	/*####collect data from terminal end####*/
	/*####details insert start####*/
	$scope.detailslInsert = function(){	
		$http.post("backend/details-insert.php", {
			'shedulename':$scope.shedulename,
			'estimatedname':$scope.estimatedname,
			'flightid':$scope.flightid,
			'departureid':$scope.departureid,
			'presentid':$scope.presentid,
			'destinationid':$scope.destinationid,
			'terminalid':$scope.terminalid,
			'statusname':$scope.statusname
		})
		.success(function(data,status,headers,config){
		alert(data);
	});
	}
	/*####details insert end####*/
	/*####details delete and refresh start####*/
	/*
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
	/*####details delete and refresh end####*/
	
		
});
	