      <?php
   session_start();
      include ('../dbcon.php');
      include('../myfunctions.php');

      if(isset($_POST['add_category_btn']))
      {
                     $name                = $_POST['name'];
                     $slug                = $_POST['slug'];
                     $description         = $_POST['description'];
                     $meta_title          = $_POST['meta_title'];
                     $meta_description    = $_POST['meta_description'];
                     $meta_keywords       = $_POST['meta_keywords'];
         
                     $status              = isset($_POST['status']) ? '1':'0';
                     $popular             = isset($_POST['popular']) ? '1':'0';

                     $image = $_FILES['image']['name'];
                  
                     $path = "uploads";
                     $image_ext = pathinfo( $image, PATHINFO_EXTENSION);
                     $filename = time().'.'.$image_ext;



                  $cate_query = "INSERT INTO categories (name,slug,description,status,popular,image,meta_title,meta_description,meta_keywords) 
                  VALUES('$name','$slug','$description','$status','$popular','$filename','$meta_title','$meta_description','$meta_keywords')";

                  $cate_query_run = mysqli_query($con, $cate_query);

                     if ($cate_query_run) {
                        
                     
                           move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                           redirect("add-category.php", "Category added successfully");


                        }
                        else
                           {
                     
                        redirect("add-category.php", "Error!");
                     
                        }

      }
      else if(isset($_POST['update_category_btn']))
      {
                           $category_id         = $_POST['category_id'];
                           $name                = $_POST['name'];
                           $slug                = $_POST['slug'];
                           $description         = $_POST['description'];
                           $meta_title          = $_POST['meta_title'];
                           $meta_description    = $_POST['meta_description'];
                           $meta_keywords       = $_POST['meta_keywords'];

                           $status              = isset($_POST['status']) ? '1':'0';
                           $popular             = isset($_POST['popular']) ? '1':'0';

                           $new_image = $_FILES['image']['name'];
                           $old_image = $_POST['old_mage'];

                           if($new_image != "")
                           {
                              $update_filename = $new_image;
                              $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
                              $update_filename = time().'.'.$image_ext;
               

                           }
                           else{
                              $update_filename = $old_image;
                           }

                           $path = "../uploads";

                           $update_query = "update categories set name='$name', slug='$slug', description='$description', meta_title='$meta_title',
                           meta_description='$meta_description', meta_keywords='$meta_keywords', status='$status', popular='$popular', image='$update_filename' 
                           where id='$category_id'";

                                 $update_query_run = mysqli_query($con,$update_query);

                                 if($update_query_run)
                                 {
                                    if($_FILES['image']['name'] != "")
                           {
                           move_uploaded_file($_FILES['image']['tmp'], $path.'/'.$update_filename);
                           if(file_exists("../uploads".$old_image))
                           {
                              unlink("../uploads".$old_image);
                           }
                        }
                        redirect("edit-category.php?id=$category_id", "Category updated successfully");
                     }
                     else{
                        redirect("edit-category.php?id=$category_id", "Category update failed!");

               }

      }
      else if(isset($_POST['delete_category_btn']))
      {
                        $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

                        $category_query = "select * from categories where id = '$category_id'";
                        $category_query_run  = mysqli_query($con, $category_query);
                        $category_data       = mysqli_fetch_array($category_query_run);
                        $image               = $category_data['image'];



                        $delete_query = "delete from categories where id = '$category_id'";
                        $delete_query_run = mysqli_query($con, $delete_query);
                           if($delete_query_run)
                           {
                           
                              if(file_exists("../uploads".$image))
                                          {
                                             unlink("../uploads".$old_image);
                                          }
                        
                              redirect("category.php", "Category deleted!");
                              $_SESSION['status_code'] = "info";

            }else{

                                 redirect("category.php", "error!");
      

            }

      }

      else if(isset($_POST['add_product_btn'])){

            $category_id            = $_POST['category_id'];
            $name                   = $_POST['name'];
            $slug                   = $_POST['slug'];
            $small_description      = $_POST['small_description'];
            $Description            = $_POST['Description'];
            $original_price         = $_POST['original_price'];
            $selling_price          = $_POST['selling_price'];
            $qty                    = $_POST['qty'];
            $status                 = isset($_POST['status']) ? '1':'0';
            $trending               = isset($_POST['trending']) ? '1':'0';
            $meta_title             = $_POST['meta_title'];
            $meta_description       = $_POST['meta_description'];
            $meta_keywords          = $_POST['meta_keywords'];

            $image = $_FILES['image']['name'];
                  
            $path = "uploads";
            $image_ext = pathinfo( $image, PATHINFO_EXTENSION);
            $filename = time().'.'.$image_ext;



            $query = "insert into products (name,slug,small_description,description,original_price,selling_price,image,qty,status,trending,meta_title,meta_keywords,meta_description) values('$name','$slug','$small_description','$description','$original_price','$selling_price','$filename','$qty','$status','$trending','$meta_title','$meta_keywords','$meta_description') 
            VALUES('$name','$slug','$description','$original_price','$selling_price','$filename','$qty','$status','$trending','$meta_title','$meta_keywords','$meta_description')";

            $query_run = mysqli_query($con, $query);

               if ($query_run) {
               
                 move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                  redirect("add-product.php", "Product added successfully");


         }else{
            redirect("add-product.php", "Error occured");

         }
   }

?>
