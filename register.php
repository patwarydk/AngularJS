<div class="row" ng-controller="registerCtrl">
    <div class="col-sm-4">
        <h1>Register</h1>
        <form name="myForm">
            <label>First Name:</label>
            <input type="text" ng-model="fname" class="form-control" required /><br />
            
            <label>Last Name:</label>
            <input type="text" ng-model="lname" class="form-control" /><br />
            
            <label>Email:</label>
            <input type="email" ng-model="email" class="form-control" /><br />
            
            <label>Password:</label>
            <input type="password" ng-model="pass" class="form-control" /><br />                               
            
            <label>Address:</label>
            <input type="text" ng-model="addr" class="form-control" /><br />
            
            <label>contact:</label>
            <input type="text" ng-model="con" class="form-control" /><br />
            
            <select ng-model="cat">
            	<option value="1">Electronics</option>
                <option value="2">Frozen</option>
            </select>
            
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="registration()">Register</button>
        </form>
    </div>
    <div class="col-sm-8">
    	<table class="table table-hover table-bordered">
        	<tr>
            	<th>Full Name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.fname}} {{item.lname}}</td>
                <td>{{item.email}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_register(item.id)"></span></a></td>
            </tr>
        </table>
    </div>
</div>

















