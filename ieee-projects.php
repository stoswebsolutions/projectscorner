<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>IEEE Projects | Projects Corner - Building dreams to reality</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
		<link rel="icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid topbar d-none d-lg-block">
                <div class="container px-0">
                          <div class="row align-items-center">
                        <?php include 'top_navbar.php'; ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-light">
                <div class="container px-0">
                     <?php include 'menu.php'; ?>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">IEEE Projects</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active text-white">IEEE Projects</li>
                    
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        
        <!-- Services Start -->
        <div class="container-fluid services py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                    <!--<p class="fs-4 text-uppercase text-center text-primary">Our Service</p>-->
                    <h1 class="display-3">IEEE Projects on various technologies</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Python IEEE Projects</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">View More..</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/python-1.jpeg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/java-1.png" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>Java IEEE Projects</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">View More..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Dotnet IEEE projects</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">View more..</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/dotnet-1.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/matlab-1.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>MATLAB Image processing IEEE Proejcts</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">View more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Hadoop IEEE Projects</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">View more..</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/hadoop-1.png" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/ns2-1.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>NS2 IEEE Projects</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">View more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>PHP Projects</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/python-1.jpeg" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="img/php-1.png" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="services-content text-start">
                                        <h3>React JS Projects</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">View more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="services-btn text-center">
                            <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5"> IEEE Projects More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->



        <!-- Footer Start -->
         <?php include 'footer.php'; ?>
        <!-- Footer End -->



        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>projectscorner.in</a> All right reserved.</span>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                       Designed By <a class="border-bottom" href="www.s2websolutions.com">S2Web Solutions</a> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>