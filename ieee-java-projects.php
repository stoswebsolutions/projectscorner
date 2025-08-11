<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F871KWSWN6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-F871KWSWN6');
    </script>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="project.css" rel="stylesheet">

    <!-- Extra Responsive Fixes -->
    <style>
        /* Wrap long text in table cells */
        #projectsTable td {
            white-space: normal;
            word-break: break-word;
        }
        /* Reduce padding for small devices */
        @media (max-width: 576px) {
            .services {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid topbar d-none d-lg-block bg-primary text-white py-2">
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

    <!-- Services Start -->
    <div class="container-fluid services py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 fw-bold text-primary">Projectscorner's Java IEEE Projects</h1>
                <p class="lead">Projectscorner's Java IEEE Projects stand as a testament to innovation and excellence in the realm of software development. These projects are designed to harness the power of Java, a versatile and robust programming language, to create solutions that address real-world challenges.
                </p>
            </div>
            <div class="mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <h5 class="text-primary">Mission Statement:</h5>
                <p class="fs-6 text-justify">To deliver top-tier Java projects that not only fulfill academic requirements but also contribute to the technological advancement of various industries.</p>
                </div>
            <div class="row align-items-center g-5">
                <!-- Image first on desktop, second on mobile -->
                <div class="col-md-6 order-1 order-md-0 wow fadeInLeft" data-wow-delay="0.4s">
                    <img src="images/javaIEEE.jpg" alt="Java IEEE Project Showcase" class="img-fluid rounded shadow-lg animate__animated animate__fadeInLeft">
                </div>
                <div class="col-md-6 order-0 order-md-1 wow fadeInRight" data-wow-delay="0.5s">
                    <ul class="ps-3">
                        <li class="mb-3">We offer a diverse range of IEEE standard projects in Java covering various domains, including:
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-primary">Software Applications</li>
                                <li class="list-group-item list-group-item-secondary">Web Development</li>
                                <li class="list-group-item list-group-item-success">Mobile Computing</li>
                                <li class="list-group-item list-group-item-danger">Networking Solutions</li>
                                <li class="list-group-item list-group-item-warning">Artificial Intelligence</li>
                            </ul>
                        </li>
                        <li class="mt-3">Clients can choose from our curated list of project titles or request customization to tailor projects to their specific interests and requirements.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Projects Table with Filter -->
    <div class="container my-5">
        <h5 class="text-primary mb-4">List of Projects:</h5>
        <div class="table-responsive wow fadeInUp" data-wow-delay="0.2s">
            <table class="table table-bordered table-hover shadow-sm" id="projectsTable">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Project Code</th>
                        <th>IEEE Java Project</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PCJ101</td>
                        <td>Online Banking System with Secure Authentication</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PCJ102</td>
                        <td>E-commerce Website with Advanced Search and Recommendation System</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Conclusion -->
    <div class="text-center px-4 wow fadeInUp" data-wow-delay="0.3s">
        <p class="m-5 fs-6">Whether you're a student seeking an academic project or a professional looking to enhance your skills, Projectscorner is your reliable partner for IEEE projects in Java, Python, .NET, MATLAB, and more. <strong>Explore, learn, and grow with us!</strong></p>
    </div>

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4 bg-dark text-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start">
                    <span><i class="fas fa-copyright me-2"></i>Projectscorner All rights reserved.</span>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="me-3 btn btn-outline-light rounded-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3 btn btn-outline-light rounded-circle"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3 btn btn-outline-light rounded-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3 btn btn-outline-light rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="me-3 btn btn-outline-light rounded-circle"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    Designed By <a class="text-light text-decoration-underline" href="https://s2swebsolutions.com/">S2SWeb Solutions</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

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
