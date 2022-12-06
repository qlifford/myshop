<?php 
include('includes/header.php');
 include('../middleware/adminMiddleware.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

                        <!-- <?php 
                            if(isset($_SESSION['message'])) 
                            {?>
                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                    <strong></strong> <?= $_SESSION['message'];?>
                                    <button type="" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>

                                <?php
                                unset($_SESSION['message']);
                                    }?> -->


            <div class="card">
                <div class="card-header">
                     <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = getAll("categories");

                            if(mysqli_num_rows($category) > 0)
                            {
                                foreach($category as $item){
                                    ?>
                                <tr>
                                    <td><?= $item['id'];?></td>
                                     <td><?= $item['name'];?></td>
                                     <td>
                                         <img src="../uploads/<?= $item['image'];?>" width="50px" height="50px">                                       
                                    </td>
                                     <td><?= $item['status'] == '0'? "visible":"hidden"?></td>
                                    <td> <a href="edit-category.php?id=<?= $item['id'];?>" class="btn btn-info">Edit</a>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="category_id" value="<?= $item['id'];?>">
                                    <button type="submit" class="btn btn-primary" name="delete_category_btn">Delete</button>
                                            </form>
                                </td>
                                        </tr>

                                    <?php
                                }

                            }
                            else
                            {
                                echo "no records found";
                            }
                            ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>               
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>