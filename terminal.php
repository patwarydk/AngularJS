<div class="row" ng-controller="terminalCtrl">
    <div class="col-sm-4">
      	  <h3>Insert Terminal</h3>
          <form name="myForm">
          	<label>Terminal Name:</label>
            <input type="text" ng-model="name" class="form-control" required/><br />
            <label>Airport Name:</label>
            <select ng-model="terminalid" class="form-control">
            	<option ng-repeat="item in allterminalData" value="{{item.id}}">{{item.name}}</option>
            </select><br />
                       
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="terminalInsert()">Save</button>
          </form>     
    </div>
   <div class="col-sm-8">
        <table class="table table-hover table-bordered">
        	<tr>
                <th>Terminal Name</th>
                <th>Airport Name</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.name}}</td>
                <td>{{item.airportname}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_flight(item.id)"></span></a></td>
            </tr>
        </table>
    </div>
</div>