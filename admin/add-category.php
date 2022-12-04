<?php 

include('includes/header.php');
 include('../middleware/adminMiddleware.php');

?>

<div class="container">
    <div class="row">
            <div class="col-md-12">
                 <?php 
                if(isset($_SESSION['message'])) 
                    {
                    ?>
                    <div class="alert alert-light alert-dismissible fade show" role="alert">
                    <strong></strong> <?= $_SESSION['message'];?>
                    <input type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></input>
                    </div>
                    
                     <?php
                 unset($_SESSION['message']);

                     }
                    ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                    <div class="card-body">
                     <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Enter Slug">
                                </div>

                                
                                <div class="col-md-12">
                                    <label for="">Description</label>
                                    <textarea rows="3" name="description" class="form-control" placeholder="Enter Description"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label for="">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title">
                                </div>

                                <div class="col-md-12">
                                    <label for="">Meta Description</label>
                                    <textarea rows="3" name="meta_description" class="form-control" placeholder="Enter Meta Description"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Meta Keywords</label>
                                    <textarea rows="3" name="meta_keywords" class="form-control" placeholder="Enter Meta Keywords"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Popular</label>
                                    <input type="checkbox" name="popular">
                                </div>

                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="add_category_btn">Finish</button>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>