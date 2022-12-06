<?php
session_start();
include ('dbcon.php');

    if (isset($_POST['register_btn'])) 
        {
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

            $select_query = "Select * from users_dada where email = '$email'";
            $result_query = mysqli_query($con,$select_query);

                if($result_query)
                {
                    $num = mysqli_num_rows($result_query);
                    // echo $num;
                    if($num > 0){
                        $_SESSION['status'] = "Sorry,Email already taken!";
                        header('location: register.php');
            }
            else{
                if ($password == $cpassword) {
                            $insert_query = "INSERT INTO users_dada(name, email, phone, password) 
                            VALUES('$name','$email','$phone','$password')";
                            $insert_query_run = mysqli_query($con, $insert_query);
                            if ($insert_query_run) {
                                $_SESSION['status'] = "Registration successful!";
                                $_SESSION['status_code'] = "success";
                                header('location: login.php');
                    
                        }else{
                            $_SESSION['status'] = "An error occured!";
                            $_SESSION['status_code'] = "warning";
                            header('location: register.php');
                        }                        
                    }
                    else
                    {
                    $_SESSION['status'] = "Please enter matching passwords!";
                    $_SESSION['status_code'] = "warning";
                        header('location: register.php');
                    }
                    }
         }
    }elseif(isset($_POST['login_btn']))
        {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            $login_query = "Select * from users_dada where name = '$name' and password = '$password'";
            $result_query = mysqli_query($con, $login_query);

            if(mysqli_num_rows($result_query) > 0)
            { 
                $_SESSION['auth'] = "true";

                $userdata = mysqli_fetch_array($result_query);
                $useremail= $userdata['email'];
                $username= $userdata['name'];
                $userpassword = $userdata['password'];
                $role_as = $userdata['role_as'];

                $_SESSION['auth_user'] = [
                    'email'     => $useremail,
                    'name'      => $username,
                    'password'   => $userpassword
                ];  
                $_SESSION['role_as'] = $role_as;

                if($role_as == 1)
                    {
                    $_SESSION['status'] = "Welcome to Admin dashboard!";
                    $_SESSION['status_code'] = "info";
                    header('location: admin/index.php');  
                }

                else{
                $_SESSION['status'] = "Congrats you logged in successfully!";
                $_SESSION['status_code'] = "success"; 
                    header('location: index.php'); 
                }
            }
            else
            {
                $_SESSION['status'] = "Name or password is invalid!";
                $_SESSION['status_code'] = "error";
                header('location: login.php');  
            }
        }   
            
            ?>

