<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="Admin/vertical/assets/images/favicon.ico">


    <!-- App css -->
    <link href="Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    
   

   
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>

        <?php
        include("include/menu.php");
        ?>
        <!-- ========== Left Sidebar Start ========== -->


        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Starter</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Starter</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

            </div> <!-- container-fluid -->
        </div>
        <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">With Indicators</h4>
                                    <p class="card-subtitle mb-4">You can also add the indicators to the carousel, alongside the controls, too.</p>
                                    
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="img/Q5EBA2-HERO.webp" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/Q5EBA2-HERO.webp" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/Q5EBA2-HERO.webp" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">With Captions</h4>
                                    <p class="card-subtitle mb-4">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>.</p>
                                    
                                    <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="img/Q5EBA2-HERO.webp" alt="..." class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">First slide label</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/Q5EBA2-HERO.webp" alt="..." class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">Second slide label</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/Q5EBA2-HERO.webp" alt="..." class="d-block img-fluid">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">Third slide label</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> 
                    <div class="container-fluid row">
                                    <?php for ($i = 0; $i < 10; $i++) {
                                    ?>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/0/05/Pump_bringback_weiss.jpg" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Titulo</h5>
                                                    <p class="card-text">
                                                        Descripcion
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
        <!-- End Page-content -->
       
        <?php

        include("include/pie_pagina.php");
        ?>


    </div>
    <!-- end main content-->


    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="Admin/vertical/assets/js/waves.js"></script>
    <script src="Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="Admin/vertical/assets/js/theme.js"></script>

</body>

</html>
