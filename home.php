<div class="row" ng-controller="registerCtrl">
    <div class="col-sm-8">
    <h1>Welcome to our Website</h1>
      	       
    </div>
    <div class="col-sm-4">
    	<h1>Login</h1>
        <form name="myForm">           
            <label>Email:</label>
            <input type="email" ng-model="email" class="form-control" /><br />            
            <label>Password:</label>
            <input type="password" ng-model="pass" class="form-control" /><br />                                          
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="login()">Login</button>
        </form>
    </div>
</div>