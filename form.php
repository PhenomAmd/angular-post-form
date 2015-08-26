<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->

<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
--> <!-- LOAD JQUERY -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <!-- LOAD ANGULAR -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- PROCESS FORM WITH AJAX (NEW) -->
  <script src="angular_form.js" type="text/javascript"></script>
</head>

<!-- apply the module and controller to our body so angular is applied to that -->
<body ng-app="AngularSubmitForm" ng-controller="FormController" >

<br /><br />
<!--<a href="javascript:void(0)" id="editStudentForm">Edit</a>-->
<div  class="alert-success" style="height:30px" ng-show="show_success_message">{{ show_success_message }}</div>

<div class="col-md-6"  ng-hide="addformtoggle">



<form ng-submit="processForm()" id="addRecordForm" method="post">

  <div id="name-group" class="form-group" ng-class="{ 'has-error' : error_first_name }"> 
    <label>First Name</label> 
    <input type="text" name="first_name" class="form-control" placeholder="First Name" ng-model="PostformData.first_name"> 
    <span class="help-block" ng-show="error_first_name">{{ error_first_name }}</span> 
  </div>


  <div id="superhero-group" class="form-group" ng-class="{ 'has-error' : error_last_name }"> 
      <label>Last Name</label> 
      <input type="text" name="last_name" class="form-control" ng-model="PostformData.last_name" placeholder="Last Name"> 
      <span class="help-block" ng-show="error_last_name">{{ error_last_name }}</span> 
  </div>
  
    <div id="superhero-group" class="form-group" ng-class="{ 'has-error' : error_email }"> 
      <label>Email</label> 
      <input type="text" name="email" class="form-control" ng-model="PostformData.email" placeholder="Email"> 
      <span class="help-block" ng-show="error_email">{{ error_email }}</span> 
  </div>

 
  <button type="submit" class="btn btn-success btn-lg btn-block">
      <span class="glyphicon glyphicon-flash"></span> Submit !
  </button>
</form>
<!-- SHOW DATA FROM INPUTS AS THEY ARE BEING TYPED -->
<pre>
    {{ PostformData }}
</pre>

</div>






</body>
</html>
