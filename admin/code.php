<?php 
require '../config/function.php';
if(isset($_POST['saveUser'])){

    $dep=validate($_POST['dep']);
    $id=validate($_POST['id']);
    $name=validate($_POST['name']);
    $password=validate($_POST['password']);
    $conf_password=validate($_POST['conf_password']);
    $mobile=validate($_POST['mobile']);
    $email=validate($_POST['email']);
    $address=validate($_POST['address']);
    $role=validate($_POST['role']);

    
    if($dep !='' || $id !='' || $name !='' || $password !='' || $conf_password !='' || $mobile !='' || $email !='' || $address !=''|| $role !=''  ){

        $query="INSERT INTO users(dep,id,name,password,conf_password,mobile,email,address,role) VALUES('$dep','$id','$name','$password','$conf_password','$mobile','$email','$address','$role')";
        $result=mysqli_query($conn,$query);
        if($result){
            redirect('users.php','User/Admin added successfully');

        }else{
            redirect('users-create.php','something went wrong');
        }
    }
    else{

        // $_SESSION['status']="Please fill all inputs";
        // header('Location: users-create.php');
        // exit();
        redirect('users-create.php','Please fill all the input fields');

    }


}
/////edit deer submit button daragdahad endeh vildel
if(isset($_POST['updateUser']))
{
    $dep=validate($_POST['dep']);
    $id=validate($_POST['id']);
    $name=validate($_POST['name']);
    $password=validate($_POST['password']);
    $conf_password=validate($_POST['conf_password']);
    $mobile=validate($_POST['mobile']);
    $email=validate($_POST['email']);
    $address=validate($_POST['address']);
    $role=validate($_POST['role']);
    $user=getById('users',$id);
    if($user['status']!=200){
        redirect('users-edit.php?id='.$id,'no such id found');
    }

    
    if($dep !='' || $id !='' || $name !='' || $password !='' || $conf_password !='' || $mobile !='' || $email !='' || $address !='' || $role !='' ){
  $query="UPDATE users SET 
        dep='$dep',
        id='$id',
        name='$name',
        password='$password',
        conf_password='$conf_password',
        mobile='$mobile',
        email='$email',
        address='$address',
        role='$role',
        WHERE id='$id'";




        $result=mysqli_query($conn,$query);
        if($result){
            redirect('users.php','updated successfully');

        }else{
            redirect('users-create.php','something went wrong');
        }
    }
    else{

        // $_SESSION['status']="Please fill all inputs";
        // header('Location: users-create.php');
        // exit();
        redirect('users-create.php','Please fill all the input fields');

    }
}
?>