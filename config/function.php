<?php 
session_start();
require 'dbcon.php';

function validate($inputData){

    global $conn;
    $validatedData =mysqli_real_escape_string($conn,$inputData);
    return trim($validatedData);
}




function logoutSession(){
    unset($_SESSION['auth']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInUser']);
}



function redirect($url,$status)
{
    $_SESSION['status']=$status;
    header('Location: '.$url);
    exit();
}
function alertMessage()
{
    if(isset($_SESSION['status'])){
        echo'<div class="alert alert-success">
        <h6>'.$_SESSION['status'].'</h6>
        </div>';
        unset($_SESSION['status']);
    }
}
//id ni baigaa uguig shalgah isset
function checkParamId($paramType){

    if(isset($_GET[$paramType])){
            if($_GET[$paramType] !=null){
                return $_GET[$paramType];

            }else{
                return 'No id found';
            }
    }else{
        return 'No id given';
    }
}



function getAll($tableName)
{
    global $conn;

    $table=validate($tableName);
    $query="SELECT * FROM $table";
     $result=mysqli_query($conn,$query);
     return $result;

}


function getById($tableName,$id)
{
    global $conn;
     
    $table=validate($tableName);
    $id=validate($id);

    $query="SELECT * FROM  $table WHERE id='$id' LIMIT 1";
    $result=mysqli_query($conn,$query);
    if($result)
    {
            if(mysqli_num_rows($result)==1)
            {
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $response=[
                        'status'=>200,
                        'message'=>'Fetchd data',
                        'data'=>$row
                    ];
                    return $response;
            }
            else{
                $response=[
                    'status'=>404,
                    'message'=>'No data record'
                ];
                return $response;
            }
    }
    else{

        $response=[
            'status'=>500,
            'message'=>'Something went wrong'
        ];
        return $response;
    }
}


function deleteQuery($tableName,$id){
    global $conn;
    $table=validate($tableName);
    $id=validate($id);
    $query="DELETE FROM $table WHERE id='$id' LIMIT 1";
    $result=mysqli_query($conn,$query);
    return $result;
}

?>
