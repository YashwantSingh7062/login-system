<?php
if(isset($_GET['action'])){
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Validating form data
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if($_GET['action'] == "form-validation"){
        // This validation can also be done by validating data from the database.
        $valid_username = "yashwant";
        $valid_password = "12345";
        $username = $_GET['username'];
        $password = $_GET['password'];
        
        if($username == $valid_username && $password == $valid_password){
            echo "<span class='text-success'>You are logged in.</span>";
        }
        else{
            echo "<span class='text-danger'>Username or Password is incorrect.</span>";
        }
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Checking if username is available or not
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    else if($_GET['action'] == 'signup_username_suggest'){
        if($_GET['query'] == "yashwant"){
            echo "<span class='text-danger'>Username not available</span>";
        }
        else{
            echo "<span class='text-success'>Username available</span>";
        }
    }
}
else{
    header("location:index.php");
}
?>
