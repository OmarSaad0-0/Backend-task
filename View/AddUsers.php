<?php
include  '../Controller/User.php';
include  '../Helpers/Services.php';

$userController=new UsersController;
if(isset($_POST["submit"])){
echo'flag1';
$Respond=$userController->Add_New_User($_POST["Name"],$_POST["Email"],$_POST["phone"],$_POST["proficiency"]);

if($Respond===true)
{
    echo 'User is added successfully';
    SendMail($_POST['Email']);
      header("Location: ../View/Users.php");
}
else{ 
    foreach ($Respond as $i){
    echo $i;
}
}
}
?>