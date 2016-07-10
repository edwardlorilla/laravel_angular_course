<!doctype html>
<html lang="en" ng-app="employeeRecords">
<head>
    <meta charset="UTF-8">
    <title>Laravel 5 AngularJS CRUD Example</title>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">

</head>
<body>
<div ng-controller="employeesController">
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Contact Number</td>
            <td>Position</td>
            <td><button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Add Employee</button></td>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="employee in employees">
            <td>@{{ employee.id }}</td>
            <td>@{{ employee.name }}</td>
            <td>@{{ employee.email }}</td>
            <td>@{{ employee.contact_number }}</td>
            <td>@{{ employee.position }}</td>
            <td>

                <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', employee.id)"></button>
                <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(employee.id)"></button>

            </td>
        </tr>
        </tbody>
    </table>

</div>
<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('js/jquery.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/controllers/employees.js') ?>"></script>
</body>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">@{{form_title}}</h4>

                <div class="modal-body">
                    <form name="frmEmployees" class="form-horizontal" novalidate="">
                        <div class="form-group error">
                            <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error" id="name" name="name" ng-model="employee.name" ng-required="true" >
                                <span class="help-inline" ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Name field is required</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</html>