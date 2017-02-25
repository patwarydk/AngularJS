// JavaScript Document
var appTerminal = angular.module("terminalApp", []);
appTerminal.controller("terminalCtrl", function ($scope, $http) {
	/*####terminal view start####*/
	$http.post("backend/terminal-view.php", {})
	.success(function(data){
		$scope.allData = data;	
	})
	/*####terminal view start####*/
	/*####collect data from airport start####*/
	$http.post("backend/airport-view.php", {})
	.success(function(data){
		$scope.allterminalData = data;	
	})
	/*####collect data from airport end####*/
	/*####terminal insert start####*/
	$scope.terminalInsert = function(){	
		$http.post("backend/terminal-insert.php", {
			'name':$scope.name,
			'terminalid':$scope.terminalid
		})
		.success(function(data,status,headers,config){
		alert(data);
	});
	}
	/*####terminal insert end####*/
	/*####terminal delete and refresh start####*/
	
	$scope.delete_flight = function(id){
		$http.post("backend/terminal-delete.php", {
			'id':id
		})
		.success(function(data,status,headers,config){	
			$http.post("backend/terminal-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})		
			alert(data);
		});
	}
	/*####terminal delete and refresh end####*/
		
});
	