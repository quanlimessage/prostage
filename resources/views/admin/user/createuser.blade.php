@extends('admin.master')
@section('content')
<main id="main">
    <form action="" method="POST" role="form" name="form">
        <div class="wrapper-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h2>CREATE USERS</h2>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="msg" type="text" class="form-control" name="name" required ng-model="name" placeholder="Please enter your name! ">
            </div>
            <span ng-show="form.name.$touched && form.name.$error.required" style="color: #f00;">The name is required.</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input id="msg" type="email" class="form-control" ng-model="email" required name="email" placeholder="Please enter your email! ">
            </div>
            <span ng-show="form.email.$touched && form.email.$error.required" style="color: #f00;">Email is required.</span>
            <span ng-show="form.email.$touched && form.email.$error.email" style="color: #f00;">Invalid email address.</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="msg" type="password" class="form-control" name="password" ng-model="password" required ng-minlength="8" placeholder="Please enter your password! ">
            </div>
            <span ng-show="form.password.$touched && form.password.$error.required" style="color: #f00;">The password is required.</span>
            <span ng-show="form.password.$touched && form.password.$error.minlength" style="color: #f00;">The password least 8 characters.</span>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="msg" type="password2" class="form-control" name="password2" ng-model="password2" required ng-minlength="8" placeholder="Please enter your password! ">
            </div>
            <span ng-show="form.password2.$touched && form.password2.$error.required" style="color: #f00;">The password is required.</span>
            <span ng-show="form.password2.$touched && form.password2.$error.minlength" style="color: #f00;">The password least 8 characters.</span>
            <div class="submit">
                <input type="submit" class="btn btn-default btn-lg" value="Cancel" onclick="javascript: form.action='Add';" name="action" id="check">
                <input type="submit" class="btn btn-default btn-lg" value="Submit" onclick="javascript: form.action='Add';" name="action" id="check">
            </div>
        </div>
    </form>
</main>
@endsection