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
                    <input type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label class="mb-0" value="Close"></input>
                    </div>
                    
                     <?php
                 unset($_SESSION['message']);

                     }
                    ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                    <div class="card-body">
                     <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                                <div class="col-md-12">
                                    <label class="mb-0" for="">Select Category</label class="mb-0">
                                    <select name="category_id"class="form-select mb-2">
                                        <option selected>Select Category</option>
                                            <?php                                         
                                        $categories = getAll("categories");
                                        if(mysqli_num_rows($categories) > 0)
                                        {
                                        foreach($categories as $item){
                                            ?>
                                                <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                            <?php
                                             }
                                    }else{
                                        echo "No records";
                                    }
                                        ?>                                        
                                                              
                            </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0" for="">Name</label class="mb-0">
                                    <input type="text" name="name" class="form-control mb2" placeholder="Enter Category Name">
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0" for="">Slug</label class="mb-0">
                                    <input type="text" name="slug" class="form-control mb2" placeholder="Enter Slug">
                                </div>

                                
                                <div class="col-md-12">
                                    <label class="mb-0" for="">Small Description</label class="mb-0">
                                    <textarea rows="3" name="small_description" class="form-control mb2" placeholder="Enter Small Description"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0" for="">Description</label class="mb-0">
                                    <textarea rows="3" name="description" class="form-control mb2" placeholder="Enter Description"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0" for="">Original Price</label class="mb-0">
                                    <input type="text" name="original_price" class="form-control mb2" placeholder="Enter Original Price">
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0" for="">Selling Price</label class="mb-0">
                                    <input type="text" name="selling_price" class="form-control mb2" placeholder="Enter Selling Price">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0" for="">Upload Image</label class="mb-0">
                                    <input type="file" name="image" class="form-control mb2">
                                </div>

                                    <div class="row">

                                            <div class="col-md-6">
                                                <label class="mb-0" for="">Quantity</label class="mb-0">
                                                <input type="number" name="qty" class="form-control mb2" placeholder="Enter Quantity">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="mb-0" for="">Status</label class="mb-0"> <br>
                                                <input type="checkbox" name="status">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="mb-0" for="">Trnding</label class="mb-0"> <br>
                                                <input type="checkbox" name="trending"> 
                                            </div>
                                    </div>
                              
                                <div class="col-md-12">
                                    <label class="mb-0" for="">Meta Title</label class="mb-0">
                                        <input type="text" name="meta_title"   class="form-control mb2" placeholder="Enter Meta Title">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0" for="">Meta Description</label class="mb-0">
                                    <textarea rows="3" name="meta_description" class="form-control mb2" placeholder="Enter Meta Description"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0" for="">Meta Keywords</label class="mb-0">
                                    <textarea rows="3" name="meta_keywords"     class="form-control mb2" placeholder="Enter Meta Keywords"></textarea>
                                </div>

                                <div class="col-md-12 mt-2">
                                <button type="submit" class="btn btn-primary" name="add_product_btn">Finish</button>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>