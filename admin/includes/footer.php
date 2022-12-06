<footer class="footer pt-5">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-12">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              
   

                <li class="nav-item">
                    <a href="#" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link pe-0 text-muted" target="_blank">About Us</a>
                </li>

            </ul>
            </div>
        </div>
    </div>
</footer>
</main>

 <!--   Core JS Files   -->

    
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/smooth-scrollbar.min.js"></script>
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

  </body>
</html>
