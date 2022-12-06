
    
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>


                  <?php 
                            if(isset($_SESSION['status'])) 
                            {?>

                              <script>
                                      swal({
                                                title: "<?= $_SESSION['status']; ?>",
                                                icon: "<?= $_SESSION['status_code']; ?>",
                                                button: "Ok!",
                                            });

                            
                                  </script>

                                 

                                <?php
                                unset($_SESSION['status']);
                                    }?>


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  </body>
</html>
