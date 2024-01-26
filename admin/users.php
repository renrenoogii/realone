<?php include('includes/header.php');?>


<div class="row">
    <div class="col-md-30">
        <div class="card">
            <div class="card-header">
                <h4>
                    User lista
                    <a href="users-create.php" class="btn btn-primary float-end">Add user</a>
                </h4>
            </div>
            <div class="card-body">


            <?=alertMessage();?>


                <table class="table table-bordered table-striped">
                    <thead>
                        
                        <tr>
                            <th>dep</th>
                            <th>id</th>
                            <th>name</th>
                            <th>password</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>address</th>
                            <th>role</th>
                            <th>action</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                        <!--end uchriin oloh sda    ter onclick iig sain har!!!!!!!!1-->
                            <?php 
                                $users=getAll('users');
                                if(mysqli_num_rows($users)>0)
                                {
                                        foreach($users as $userItem)
                                       {
                                        ?> 
                                        <tr>
                            
                                                <td><?= $userItem['dep'];?></td>
                                                <td><?= $userItem['id'];?></td>
                                                <td><?= $userItem['name'];?></td>
                                                < <td><?= $userItem['password'];?></td>
                                                <td><?= $userItem['mobile'];?></td>
                                                <td><?= $userItem['email'];?></td>
                                                <td><?= $userItem['address'];?></td>
                                                <td><?= $userItem['role'];?></td>
                                                <td>
                                                        <a href="users-edit.php?id=<?= $userItem['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                                        <a href="users-delete.php?id=<?= $userItem['id'];?>"
                                                        
                                                        class="btn btn-danger btn-sm"
                                                        
                                                        onclick="return confirm('really want to delete')"
                                                        >delete</a>
                                                
                                                 </td>
                                        </tr>
                                        <?php
                                       }
                                    }
                                
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="7">No record found

                                        </td>
                                    </tr>
                                    <?php
                                }

                             ?>
   
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>