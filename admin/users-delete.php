<?php 
require '../config/function.php';

$paraResult=checkParamId('id');
if(is_numeric($paraResult)){
    $id=validate($paraResult);

    $user=getById('users',$id);
    if($user['status']==200){
        $userDeleteRes=deleteQuery('users',$id);
        if($userDeleteRes){
            redirect('users.php','user deleted successfully');

        }else{
            redirect('users.php','something went wrong');
        }

    }else{
        redirect('users.php',$user['message']);
    }

}else{
    redirect('users.php',$paraResult);
}

?>