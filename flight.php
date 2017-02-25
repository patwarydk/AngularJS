<div class="row" ng-controller="flightCtrl">
    <div class="col-sm-4">
      	  <h3>Create Flight</h3>
          <form name="myForm">
          	<label>Flight Name:</label>
            <input type="text" ng-model="name" class="form-control" required="required"/><br />
            <label>Airline Name:</label>
            <select ng-model="flightid" class="form-control">
            	<option ng-repeat="item in allAirlineData" value="{{item.id}}">{{item.name}}</option>
            </select><br />
                       
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="flightInsert()">Save</button>
          </form>     
    </div>
   <div class="col-sm-8">
        <table class="table table-hover table-bordered">
        	<tr>
                <th>Flight Name</th>
                <th>Airlines Name</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.name}}</td>
                <td>{{item.airlinename}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_flight(item.id)"></span></a></td>
            </tr>
        </table>
    </div>
</div>