// JavaScript Document
var appRute = angular.module("ruteApp", []);
appRute.controller("ruteCtrl", function ($scope, $http) {
	/*####Rute view start####*/
	$http.post("backend/rute-view.php", {})
	.success(function(data){
		$scope.allData = data;	
	})
	/*####Rute view end####*/	
		/*####Rute insert start####*/
	$scope.ruteInsert = function(){
		$http.post("backend/rute-insert.php", {
			'name':$scope.name
		})
		.success(function(data,status,headers,config){
		alert(data);
	});
	}
	/*####Rute insert end####*/
	/*####Rute delete start####*/
	
	$scope.delete_rute = function(id){
		$http.post("backend/rute-delete.php", {
			'id':id
		})
		.success(function(data,status,headers,config){	
			$http.post("backend/rute-view.php", {})
			.success(function(sdata){
				$scope.allData = sdata;		
			})		
			alert(data);
		});
	}
	/*####Rute delete end####*/
});
	