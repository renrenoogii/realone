<?php 
require 'config/function.php';


//magadgui eniig ustga



if(isset($_POST['loginBtn'])){
    $idinput=validate(validate($_POST['id']));
    $passwordinput=validate(validate($_POST['password']));

    $id=filter_var($idinput, FILTER_SANITIZE_STRING);
    $password=filter_var($passwordinput, FILTER_SANITIZE_STRING);



                         if($id != ''&& $password !='')
                            {
                                $query="SELECT * FROM users WHERE id='$id' AND password='$password' LIMIT 1 ";
                                $result=mysqli_query($conn,$query);
                                if($result)
                                {
                                    if(mysqli_num_rows($result)==1)
                                    {
                                        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                                        if($row['role']=='admin')
                                        {

                                            $_SESSION['auth']=true;
                                            $_SESSION['loggedInUserRole']=$row['role'];
                                            $_SESSION['loggedInUser']=[
                                                'name'=>$row['name'],
                                                'id'=>$row['id']
                                                

                                            ];

                                            redirect('admin/index.php','Logged in successfully');
                                        }
                                        else
                                        {
                                            $_SESSION['auth']=true;
                                            $_SESSION['loggedInUserRole']=$row['role'];
                                            $_SESSION['loggedInUser']=[
                                                'name'=>$row['name'],
                                                'id'=>$row['id']
                                                

                                            ];

                                            redirect('tsag.php','Logged in successfully');
                                        }
                                    }
                                    else
                                    {
                                        redirect('login.php','Invalid id or password');
                                    }
                                }
                                else
                                {
                                    redirect('login.php','something went wrong');
                                }
                            }
                            else
                            {
                                redirect('login.php','all fields are mandetory');
                            }
}
?>