<div class="row" ng-controller="detailsCtrl">
    <div class="col-sm-4">
      	  <h3>Insert Details</h3>
          <form name="myForm">
          	<label>Shedule Time:</label>
            	<input type="time" ng-model="shedulename" class="form-control" required/><br />
            <label>Estimated Time:</label>
            	<input type="time" ng-model="estimatedname" class="form-control" required/><br />
            <label>Flight Name:</label>
            	<select ng-model="flightid" class="form-control">
                    <option ng-repeat="item in flightData" value="{{item.id}}">{{item.name}}</option>
                </select><br />
            <label>Departure Airport:</label>
                <select ng-model="departureid" class="form-control">
                    <option ng-repeat="item in departureData" value="{{item.id}}">{{item.name}}</option>
                </select><br />
            <label>Via Airport Location:</label>
                <select ng-model="presentid" class="form-control">
                    <option ng-repeat="item in presentData" value="{{item.id}}">{{item.name}}</option>
                </select><br />
            <label>Destination Airport:</label>
                <select ng-model="destinationid" class="form-control">
                    <option ng-repeat="item in destinationData" value="{{item.id}}">{{item.name}}</option>
                </select><br />
            <label>Terminal Name:</label>
                <select ng-model="terminalid" class="form-control">
                    <option ng-repeat="item in terminalData" value="{{item.id}}">{{item.name}}</option>
                </select><br />
            <label>Status:</label>
            	<input type="text" ng-model="statusname" class="form-control" required/><br />
                       
            <button ng-disabled="myForm.$invalid" type="submit" class="btn btn-default" ng-click="detailslInsert()">Save</button>
          </form>     
    </div>
    
   <div class="col-sm-8">
   <!--
        <table class="table table-hover table-bordered">
        	<tr>
                <th>Shedule Time</th>
                <th>Estimated Time</th>
                <th>Flight Name</th>
                <th>Departure Airport</th>
                <th>Present Airport Location</th>
                <th>Destination Airport</th>
                <th>Terminal Name</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
            <tr ng-repeat="item in allData">
            	<td>{{item.sheduleTime}}</td>
                <td>{{item.estimatedTime}}</td>
                <td>{{item.flightname}}</td>
                <td>{{item.airportname}}</td>
                <td>{{item.airportname}}</td>
                <td>{{item.airportname}}</td>
                <td>{{item.terminalname}}</td>
                <td>{{item.status}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-remove" ng-click="delete_gate(item.id)"></span></a></td>
            </tr>
        </table>
         -->
    </div>
</div>