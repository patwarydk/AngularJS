<div class="row" ng-controller="airportCtrl">
    <div class="col-sm-4">
      	  <h3>Create Airport</h3>
          <form name="myForm">
          	<label>Airport:</label>
            <input type="text" ng-model="name" class="form-control" required="required" /><br />
                       
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="airportInsert()">Save</button>
          </form>     
    </div>
    <div class="col-sm-8">
        <table class="table table-hover table-bordered">
        	<tr>
                <th>Airport Name</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.name}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_airport(item.id)"></span></a></td>
            </tr>
        </table>
    </div>
</div>