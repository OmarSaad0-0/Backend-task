<?php
require '../Model/Users.php';
require '../Helpers/Validation.php';
class UsersController{
private $userModel;
public function __construct() {
            $this->userModel = new user;
        }


public function Add_New_User($Name,$Email,$Pnumber,$Proficiency){

$validation=validateInput($Name, $Email,$Pnumber, $Proficiency);

if($validation===true){
    $user=array();
    $user['name']=$Name;
    $user['email']=$Email;
    $user['pnumber']=$Pnumber;
    $user['proficiency']=$Proficiency;
if($this->userModel->Add_User($user)){
return true;
}
else{
return false;
}
}
else{
    return $validation;
}
}

public function Update_User($id,$Name,$Email,$Pnumber,$Proficiency){
     $user=array();
    $user['name']=$Name;
    $user['email']=$Email;
    $user['pnumber']=$Pnumber;
    $user['proficiency']=$Proficiency;
    $user['id']=$id;
    if($this->userModel->updateUser($user)){
        return true;
    }
    else {
        return false;
    }

}   
 
public function Delete_User($id){
    if($this->userModel->delete($id)){
        return true;
    }
    else {
        return false;
    }
}    

public function View_Users(){
    return $this->userModel->ViewUsers();
}    

}
