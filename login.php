<?php


    session_start();
    include('includes/header.php');

    if(isset($_SESSION['auth'])){
            $_SESSION['status'] = "Logged in!";
            $_SESSION['status_code'] = "info";
                header('location: index.php');
                exit();
    }


      ?>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">

                    <div class="card">
                            <div class="card-header text-center">
                            <h4>Please login</h4>
                            </div>
                            <div class="card-body">
                                    <form action="authcode.php" method="post">
                                    
                                    <div class="mb-3">
                                        <label class="form-label" class="form-label">Username or email</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter username">
                                    </div>
<!-- 
                                    <div class="mb-3">
                                        <label class="form-label" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                    </div> -->

                                    <div class="mb-3">
                                        <label class="form-label" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                    </div><br>

                                    <button type="submit" name="login_btn" class="btn btn-primary"> Login</button><br><br>
                            </form>
                            <div class="card-footer"> Don't have an account?<a href="login.php"></a> Register</div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>