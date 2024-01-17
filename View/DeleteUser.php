<?php
include  '../Controller/User.php';
$userController=new UsersController;
if(isset($_GET['deleteid'])){
    if($userController->Delete_User($_GET['deleteid'])){
        echo"user deleted";
        header("Location: ../View/Users.php");
       
        
    }
    else{
        echo"failure";
    }
}

?>