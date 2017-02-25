<div class="row" ng-controller="airlinesCtrl">
    <div class="col-sm-4">
      	  <h3>Create Airlines</h3>
          <form myForm>
          	<label>Airlines:</label>
            <input type="text" ng-model="name" class="form-control" /><br />
                       
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="airlineInsert()">Save</button>
          </form>     
    </div>
    <div class="col-sm-8">
        <table class="table table-hover table-bordered">
        	<tr>
                <th>Airlines Name</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.name}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_airlines(item.id)"></span></a></td>
            </tr>
        </table>
    </div>
</div>