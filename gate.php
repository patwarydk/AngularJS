<div class="row" ng-controller="gateCtrl">
    <div class="col-sm-4">
      	  <h3>Insert Gate</h3>
          <form name="myForm">
          	<label>Gate Name:</label>
            <input type="text" ng-model="name" class="form-control" required/><br />
            <label>Terminal Name:</label>
            <select ng-model="getid" class="form-control">
            	<option ng-repeat="item in allgateData" value="{{item.id}}">{{item.name}}</option>
            </select><br />
                       
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="gatelInsert()">Save</button>
          </form>     
    </div>
   <div class="col-sm-8">
        <table class="table table-hover table-bordered">
        	<tr>
                <th>Gate Name</th>
                <th>Terminal Name</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.name}}</td>
                <td>{{item.terminalname}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_gate(item.id)"></span></a></td>
            </tr>
        </table>
    </div>
</div>