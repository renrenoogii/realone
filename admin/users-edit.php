<?php include('includes/header.php')?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    edit user
                    <a href="users.php" class="btn btn-danger float-end">back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
<!--id baigaa esehiig shalgah  funtion.php deer vvsgesen functionoo end duudaj baina -->
                <?php 
                    $paramResult=checkParamId('id');
                    if(!is_numeric($paramResult)){
                        echo '<h5>'.$paramResult.'</h5>';
                        return false;
                    }
                    $user=getById('users',checkParamId('id'));
                    if($user['status']==200)
                    {
                        ?>
                            <div class="row">
                            <div class="col-md-6">
                                            
                                <div class="mb-3">
                                         <label>dep</label>
                        <select name="department" value="<?=$user['data']['department'];?>" required class="form-select">
                                                <option value="">dep songonuu</option>
                                                <option value="4hot">4hot</option>
                                                <option value="ryoko">ryoko</option>
                                                <option value="baruun">baruun</option>
                                                <option value="zvvn">zvvn</option>
                                                </select>
                                            </div> 


                                        </div>


                                        <div class="col-md-6">

                                            <div class="mb-3">
                                            <label>id</label>
                                            <input type="text" name="id" value="<?=$user['data']['id'];?>" required class="form-control">
                                        </div>
                                            
                                        </div>


                                        <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>name</label>
                                            <input type="text" name="name" value="<?=$user['data']['name'];?>"required class="form-control">
                                        </div>

                                        </div>





                                        <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>password</label>
                                            <input type="text" name="password" value="<?=$user['data']['password'];?>"required class="form-control">
                                        </div>
                                        </div>



                                        <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>conf_password</label>
                                            <input type="text" name="conf_password" value="<?=$user['data']['conf_password'];?>"required class="form-control">
                                        </div>
                                        </div>


                                        <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>mobile</label>
                                            <input type="text" name="mobile" value="<?=$user['data']['mobile'];?>" required class="form-control">
                                        </div>
                                        </div>



                                        <div class="col-md-6">
                                            
                                        <div class="mb-3">
                                            <label>email</label>
                                            <input type="email" name="email" value="<?=$user['data']['email'];?>" class="form-control">
                                        </div>

                                        </div>


                                        <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>address</label>
                                            <input type="text" name="address" value="<?=$user['data']['address'];?>"required class="form-control">
                                        </div>
                                        </div>

                                                    
                                        <div class="mb-3">
                                         <label>Select role</label>
                                            <select name="role" required class="form-select">
                                                <option value="user">user</option>
                                                 <option value="admin">admin</option>
                           
                           
                            </select>
                        </div> 
                                    
                                        <div class="col-md-6">
                                            <div class="mb-3 text-end">
                                                </br>
                                            <button type="submit" name="updateUser" class="btn btn-primary"> update </button>
                                        </div>
                                        </div>





                                    </div>

                        <?php
                        
                    }
                    else
                    {
                        echo '<h5>'.$user['message'].'</h5>';
                    }

                ?>

              
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php')?>
<!--editiin department hesgiig ynzlah heregtei-->