<?php
	$errors = array();        // array to hold validation errors
	$data   = array();        // array to pass back data
   if(!empty($_REQUEST['action']) && $_REQUEST['action'] == "postFormData")	
    {	  
		  // validate the variables ========
		  if (empty($_POST['first_name']))
			$errors['first_name'] = 'First Name is required.';
		  
		  if (empty($_POST['last_name']))
			$errors['last_name'] = 'Last Name is required';
			
			if (empty($_POST['email']))
			$errors['email'] = 'Email is required';
		
		  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false && $_POST['email']!="" ) {
     		$errors['email'] = 'Enter Valid Email';
           }	
		  
		  // return a response ==============
		  
		  // response if there are errors
		  if ( ! empty($errors)) {
		  
			// if there are items in our errors array, return those errors
			$data['success'] = false;
			$data['errors']  = $errors;
		  } else {
		  
			// if there are no errors, return a message , process your form data as you want here
		 
		  
		  $data['message']    = "Record added successfully";
		  $data['success'] = true;
		  }
		  echo json_encode($data);
     }
?>