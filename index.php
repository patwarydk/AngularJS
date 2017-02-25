<!DOCTYPE html>
<html ng-app="exampleApp">
<head>
 <title>Directives</title>
 <script src="js/angular.min.js"></script>
 <script src="js/jquery.min.js"></script>
 <link href="css/bootstrap.css" rel="stylesheet" />
 <link href="css/bootstrap-theme.css" rel="stylesheet" />
 <link href="css/style.css" rel="stylesheet"/>
 <script>
	var app = angular.module("exampleApp", ['registerApp', 'airlinesApp', 'airportApp', 'flighttApp', 'ruteApp', 'terminalApp', 'gateApp', 'detailsApp']);
	app.controller("masterCtrl", function ($scope) {
		$scope.page_name = "views/home.php";
		$scope.login_status = 0;
		$scope.page_change = function(page){
			$scope.page_name = page;
		}
		$scope.login = function(){
		$http.post("backend/login.php", {
			'email':$scope.email,
			'pass':$scope.pass
		})
		.success(function(data,status,headers,config){
			alert(data);
		});
		}
	});	
 </script> 
 <script src="controllers/registerController.js"></script>
 <script src="controllers/airlinesCtrl.js"></script>
 <script src="controllers/airportCtrl.js"></script>
 <script src="controllers/flightCtrl.js"></script>
 <script src="controllers/ruteCtrl.js"></script>
 <script src="controllers/terminalCtrl.js"></script>
 <script src="controllers/gateCtrl.js"></script>
 <script src="controllers/detailsCtrl.js"></script>
</head>
<body ng-controller="masterCtrl" class="bgcolor">
<div class="container">
    <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <nav class="navbar navbar-default">
              	<div class="container-fluid">
                	<div class="navbar-header">                    	
                    	<a href="#" class="navbar-brand">Menu</a>
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ourMenu">
                        	<span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="ourMenu">
                      <ul class="nav navbar-nav">
                        	<li><a href="#"  ng-click="page_change('views/home.php')">Home</a></li>
                            <li><a href="#" ng-click="page_change('views/airlines.php')">Airlines</a></li>
                            <li><a href="#" ng-click="page_change('views/airport.php')">Airport</a></li>
                            <li><a href="#" ng-click="page_change('views/rute.php')">Rute</a></li>
                            <li><a href="#" ng-click="page_change('views/flight.php')">Flight</a></li>
                            <li><a href="#" ng-click="page_change('views/terminal.php')">Terminal</a></li>
                            <li><a href="#" ng-click="page_change('views/gate.php')">Gate</a></li>
                            <li><a href="#" ng-click="page_change('views/details.php')">Details</a></li>
                            <li><a href="#" ng-click="page_change('views/register.php')">Register</a></li>
                            <li><a href="#" ng-click="page_change('views/arrival_massare.php')">Arrival Massage</a></li>
                      </ul>
                      <form class="navbar-form navbar-right">
                      		<div class="form-group">
                      			<input type="text" class="form-control" />
                            	<button type="button" class="btn btn-success">Save</button>
                            </div>
                      </form>
                    </div>    
                </div>
              </nav>             
            </div>            
        </div>  
    <ng-include src="page_name"></ng-include>
</div>

</body>
</html>














