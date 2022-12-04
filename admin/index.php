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
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        <?php
                        unset($_SESSION['message']);
                            }
                        ?>


            <div class="row mt-5">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                             <i class="material-icons opacity-10">weekend</i>
                             </div>
                             <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Cash</p>
                                    <h4 class="mb-0">Ksh 500</h4>
                             </div>
                        </div>
                        <div class="dark-horizontal my-0">
                            <div class="card-footer py-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-boarder">+55%</span>  than last week</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                             <i class="material-icons opacity-10">person</i>
                             </div>
                             <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                                    <h4 class="mb-0">30,300</h4>
                             </div>
                        </div>
                        <div class="dark-horizontal my-0">
                            <div class="card-footer py-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-boarder">+5%</span>  than last week</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                             <i class="material-icons opacity-10">person</i>
                             </div>
                             <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                                    <h4 class="mb-0">3,488</h4>
                             </div>
                        </div>
                        <div class="dark-horizontal my-0">
                            <div class="card-footer py-3">
                                <p class="mb-0"><span class="text-danger text-sm font-weight-boarder">-2%</span>  than yesterday</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                             <i class="material-icons opacity-10">weekend</i>
                             </div>
                             <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">sales</p>
                                    <h4 class="mb-0">Ksh 130,500</h4>
                             </div>
                        </div>
                        <div class="dark-horizontal my-0">
                            <div class="card-footer py-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-boarder">+5%</span>  than yesterday</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>