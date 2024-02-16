<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>About us | Projects Corner</title>
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
        <link href="about.css" rel="stylesheet">
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
        <!-- <div class="container-fluid about-bg py-5">
            <div class="container text-center py-5">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    
                    <li class="breadcrumb-item active text-white">About Us</li>
                </ol>    
            </div>
        </div> -->
        <!-- Header End -->

        
        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="img/about_page_img.png" class="img-fluid rounded" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
							<img src="img/home_about_img2.png" class="img-fluid rounded" alt="">
                    
                            </div>
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <p class="fs-4 text-uppercase text-primary">About Us</p>
                            <h1 class="display-4 mb-4">Projects Corner - Building dreams to reality</h1>
                            <p class="mb-4">Projects corner is specialized in delivering customized IEEE projects of various technologies (python,Java,Dot Net, 
Hadoop, NS2,PHP) tailored to meet your unique requirements and objectives. We understand that every project is 
different, and our team of experienced engineers and developers is dedicated to crafting solutions that align 
perfectly with your vision and goals. </p>
                           <!-- <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Special Offers</h5>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-gift fa-3x text-primary"></i>
                                        <div class="ms-4">
                                            <h5 class="mb-2">Special Offers</h5>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <p class="my-4">We have experience 10+ years in the industry connected with the lot Teaching and Research experts working in 
various prestigious Institutions. We have dedicated professionals team working with technology and updating with 
trends delivering students a quality project. 
                            </p>
                            <p class="mb-4">Customization of Projects is our Main Motto</p>
                        </div>
                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore More</a>
                    </div> 
                </div>
            </div>
        </div>
        
        <div class=" text-center" style="text-align:center">
    <h2 class="mb-3">Why Customization Matters</h2>
   
    <p class="m-5">Already available solutions often provide problems and have limitations, leaving gaps in functionality and flexibility. 
      Customization offers a distinct advantage by allowing you to tailor every aspect of the solution to your unique 
      requirements. Whether you require advanced data analysis algorithms, customized machine learning models, or 
      specialized roboƟcs applications, customization ensures that your project aligns seamlessly with your objectives and 
      workflows. </p>
    
      </div>
      <div class="text-center">
        <h2 class="">Our Customization Process</h2>
    
<div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                     <img src="img/custom-process.png" class="rounded " width="600"  alt="">
                     </div>
                   
                    <div class="col-lg-6">
                        <div class="process" >
                <h5 align="left">Requirement Gathering:</h5>
                <p align="left" style="font-size:medium">We start by understanding your organization's goals, challenges, and specific project 
requirements through comprehensive discussions and analysis. </p>
<h5 align="left"> Custom Solution Design:</h5>
                <p align="left" style="font-size:medium">Based on your requirements, our team of experts designs a customized solution 
architecture that addresses your unique needs while leveraging the power of technologies.  </p>
<h5 align="left">Development:</h5>
                <p align="left" style="font-size:medium">We follow a development process, providing regular updates and opportunities for feedback to 
ensure that the solution evolves in alignment with your expectations. </p>
<h5 align="left">Integration and Testing:</h5>
                <p align="left" style="font-size:medium">Once the solution is developed, we rigorously test it to ensure reliability, scalability, and 
performance under real-world conditions.
 </p>
<h5 align="left"> Deployment and Support:</h5>
                <p align="left" style="font-size:medium">We assist you in deploying the customized solution seamlessly into your 
environment and provide ongoing support and maintenance to ensure optimal performance and user satisfaction.  </p>
                           
        
            
</div>
</div>





</div>
        </div>


        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->



        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>www.projectscorner.in</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                           <!-- <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-twitter"></i></a>
                            <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-instagram"></i></a>
                            <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in"></i></a>-->
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://s2swebsolutions.com/">S2Web Solutions</a> 
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