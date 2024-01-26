<?php include('includes/header.php')?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add user
                    <a href="users.php" class="btn btn-danger float-end">back</a>
                </h4>
            </div>


            <div class="card-body">

            <?=alertMessage();?>

            
                <form action="code.php" method="POST">
                    <div class="row">
                    <div class="col-md-6">
                        
                         <div class="mb-3">
                            <label>dep</label>
                                <select name="dep" required class="form-select">
                            <option value="songoh">dep songonuu</option>
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
                        <input type="text" name="id" required class="form-control">
                    </div>
                        
                    </div>


                    <div class="col-md-6">
                    <div class="mb-3">
                        <label>name</label>
                        <input type="text" name="name" required  class="form-control">
                    </div>

                    </div>




                    <div class="col-md-6">
                    <div class="mb-3">
                        <label>password</label>
                        <input type="text" name="password" required class="form-control">
                    </div>
                    </div>



                    <div class="col-md-6">
                    <div class="mb-3">
                        <label>conf_password</label>
                        <input type="text" name="conf_password" required  class="form-control">
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="mb-3">
                        <label>mobile</label>
                        <input type="text" name="mobile"  required class="form-control">
                    </div>
                    </div>



                    <div class="col-md-6">
                        
                    <div class="mb-3">
                        <label>email</label>
                        <input type="email" name="email"  class="form-control">
                    </div>

                    </div>


                    <div class="col-md-6">
                    <div class="mb-3">
                        <label>address</label>
                        <input type="text" name="address" required class="form-control">
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
                        <button type="submit" name="saveUser" class="btn btn-primary"> save </button>
                    </div>
                    </div>





                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php')?>