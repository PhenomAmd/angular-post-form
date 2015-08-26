/// by jquery ajax post 

$(function() {
    //hang on event of form with id=myform
    $("#addRecordForm").submit(function(e) {
        //prevent Default functionality
        //do your own request an handle the results
        $.ajax({
                url: 'formProcess.php?action=postFormData',
                type: 'post',
                dataType: 'json',
                data: $("#addRecordForm").serialize(),
                success: function(data) {
					
					if (!data.success)
				 {
						/// display validation errors
				 }
				 else
				 {
					////// display success message
				}
                    
                }
        });

    });

});

//by angularjs


    // define angular module/app
    var formApp = angular.module('AngularSubmitForm', []); 
	
		//// list students
		 formApp.controller('FormController', function ($scope, $http,$timeout) { 


			//// Add student form 
		
		  $scope.PostformData = {};	 
	   	  $scope.processForm = function(){
		    $http({
			method  : 'POST',
			url     : 'formProcess.php?action=postFormData',
			data    : $.param($scope.PostformData),  // pass in data as strings
			headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
		   }).success(function(data) {

				if (!data.success)
				 {
				  // if not successful, bind errors to error variables
				  $scope.error_first_name  = data.errors.first_name;
				  $scope.error_last_name   = data.errors.last_name;
				  $scope.error_email      = data.errors.email;
				 }
				 else
				 {
					 // Hide errors If exist
				  $scope.error_first_name  = "";
				  $scope.error_last_name   = "";
				  $scope.error_email       = "";
				  // if successful, bind success message to message
				  $scope.show_success_message        = data.message;
				  $timeout(function () { $scope.show_success_message = false; }, 3000); 
				}
                  });
			 }
			 		 
			 
			 
			 
			 
	 
		 
   
});


