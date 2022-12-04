<?php 
session_start();
include('includes/header.php');

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "Logged in!";
        header('location: index.php');
        exit();
}

?>
<div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <?php 
                    if(isset($_SESSION['message'])) 
                    {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong></strong> <?= $_SESSION['message'];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        <?php
                        unset($_SESSION['message']);
                            }
                        ?>

                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Register Here</h4>
                    </div>
                    <div class="card-body">
                    <form action="authcode.php" method="post">
                            <div class="mb-2">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter username" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label" class="form-label">Phone</label>
                                <input type="phone" name="phone" class="form-control" placeholder="Enter phone number" required>
                            </div>


                            <div class="mb-3">
                                <label class="form-label" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label" class="form-label">Confirm password</label>
                                <input type="password" name="cpassword" class="form-control" placeholder="Confirm password">
                            </div><br>
                            <button type="submit" name="register_btn" class="btn btn-primary w-100">Register</button><br><br>
                        <div class="card-footer">
                            Already have a member?<a href="login.php"></a> Login
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>