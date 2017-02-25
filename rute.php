<div class="row" ng-controller="ruteCtrl">
    <div class="col-sm-4">
      	  <h3>Create Rute</h3>
          <form name="myForm">
          	<label>Rute Name:</label>
            <input type="text" ng-model="name" class="form-control" required/><br />
            <label>Flight Name:</label>                       
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="ruteInsert()">Save</button>
          </form>     
    </div>
   <div class="col-sm-8">
        <table class="table table-hover table-bordered">
        	<tr>
                <th>Rute Name</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.name}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_rute(item.id)"></span></a></td>
            </tr>
        </table>
    </div>
</div>