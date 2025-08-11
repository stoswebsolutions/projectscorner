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
    <title>Interships</title>
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
    <!-- Page Stylesheet -->
    <link href="css/internships.css" rel="stylesheet">
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
    <!-- Services Start -->
    <div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row align-items-center"> <!-- This keeps vertical alignment -->
            
            <!-- Left: Text -->
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <p class="fs-4 text-uppercase text-primary mb-2">Internships</p>
                <h1 class="display-6 mb-4">
                    Projects Corner 
                    <span class="fs-6 text-uppercase text-primary">- Building Dreams into Reality</span>
                </h1>
                <p class="mb-4">
                    Welcome to Projects Corner's Internship Programs! Our programs are designed to provide students with hands-on experience, practical skills development, and exposure to real-world projects across various fields. 
                    Whether you're passionate about Full-Stack Development, Java, PHP, Python, or other programming languages, we offer tailored opportunities to help you build a strong foundation for your career.
                </p>
                <h5 class="text-primary mb-2">Program Structure:</h5>
                <p class="mb-0">
                    Our internships typically span 4 months and run throughout the year. Interns work on diverse projects under the guidance of experienced professionals, gaining valuable insights and practical skills along the way.
                </p>
            </div>

            <!-- Right: Image -->
            <div class="col-lg-5 col-md-12 text-center">
                <img src="images/internship.jpg" alt="Internship Program" 
                     class="img-fluid rounded shadow-sm" 
                     style="max-height: 400px; object-fit: cover; width: 100%;">
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5amfO0yrN1I?rel=0" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video End-->
    <!-- Services End -->
    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center">Internships Key Features</h2>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="process">
                        <h5 class="text-primary">Customized Learning Tracks:</h5>
                        <p class="justify-content" style="font-size:medium">We offer customized learning tracks tailored to different areas of interest and expertise, including but not limited to:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-primary">Fullstack Development</li>
                            <li class="list-group-item list-group-item-secondary">Java Programming</li>
                            <li class="list-group-item list-group-item-success">PHP Development</li>
                            <li class="list-group-item list-group-item-danger">Python Programming</li>
                            <li class="list-group-item list-group-item-warning">Digital Marketing</li>
                            <li class="list-group-item list-group-item-info">Project Management</li>
                            <li class="list-group-item list-group-item-dark">Business Development</li>
                        </ul>
                        <h5 class="text-primary">Hands-on Projects:</h5>
                        <p class="justify-content" style="font-size:medium">Interns engage in hands-on projects that simulate real-world scenarios, allowing them to apply theoretical knowledge to practical challenges and gain valuable experience.</p>
                        <h5 class="text-primary">Mentorship and Guidance:</h5>
                        <p class="justify-content" style="font-size:medium">Interns receive mentorship and guidance from experienced professionals in their respective fields, who provide support, feedback, and insights throughout the internship program.</p>
                        <h5 class="text-primary">Skill Development Workshops:</h5>
                        <p class="justify-content" style="font-size:medium">We conduct skill development workshops and training sessions to enhance interns' technical skills, soft skills, and industry-specific knowledge, ensuring a well-rounded learning experience.</p>
                        <h5 class="text-primary">Networking Opportunities:</h5>
                        <p class="justify-content" style="font-size:medium">Interns have the opportunity to network with industry professionals, peers, and alumni through networking events, seminars, and social gatherings.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center">Internships Course Details</h2>
            <div class="accordion" id="myAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">Fullstack Development</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <p>Our Fullstack Development course is designed to equip interns with the skills and knowledge required to become proficient Fullstack developers, capable of building dynamic web applications from start to finish</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="text-center text-primary">Frontend Development</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">HTML/CSS</li>
                                        <li class="list-group-item list-group-item-secondary">JavaScript</li>
                                        <li class="list-group-item list-group-item-success">React.js</li>
                                        <li class="list-group-item list-group-item-danger">Angular.js</li>
                                        <li class="list-group-item list-group-item-warning">Vue.js</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="text-center text-primary">Backend Development</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">Node.js</li>
                                        <li class="list-group-item list-group-item-secondary">Express.js</li>
                                        <li class="list-group-item list-group-item-success">MongoDB</li>
                                        <li class="list-group-item list-group-item-danger">SQL/NoSQL Databases</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="text-center text-primary">Additional Technologies</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">RESTful APIs</li>
                                        <li class="list-group-item list-group-item-secondary">Authentication and Authorization</li>
                                        <li class="list-group-item list-group-item-success">Version Control (e.g., Git)</li>
                                        <li class="list-group-item list-group-item-danger">Deployment and Hosting Platforms (e.g., Heroku, AWS)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Java Programming</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <p>Our Java Programming course is designed to provide interns with a solid foundation in Java programming language and its application in software development.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="text-center text-primary">Java Basics</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">Data types, variables, and operators</li>
                                        <li class="list-group-item list-group-item-secondary">Control flow statements (if, else, loops)</li>
                                        <li class="list-group-item list-group-item-success">Methods and classes</li>
                                        <li class="list-group-item list-group-item-danger">Object-oriented programming concepts (inheritance, polymorphism, encapsulation)</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-center text-primary">Advanced Java</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">Exception handling</li>
                                        <li class="list-group-item list-group-item-secondary">File I/O</li>
                                        <li class="list-group-item list-group-item-success">Multithreading</li>
                                        <li class="list-group-item list-group-item-danger">GUI development with Swing or JavaFX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">PHP Development</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <p>Our PHP Development course aims to teach interns the fundamentals of PHP programming language for web development.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="text-center text-primary">PHP Basics</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">Syntax and variables</li>
                                        <li class="list-group-item list-group-item-secondary">Control structures (if, else, loops)</li>
                                        <li class="list-group-item list-group-item-success">Functions and arrays</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-center text-primary">Web Development with PHP</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-primary">Handling forms and user input</li>
                                        <li class="list-group-item list-group-item-secondary">Working with databases (MySQL, PostgreSQL)</li>
                                        <li class="list-group-item list-group-item-success">Session management and cookies</li>
                                        <li class="list-group-item list-group-item-danger">Introduction to popular PHP frameworks (e.g., Codeigniter, Laravel, Symfony)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <p class="m-5 justify-content">Our internship programs offer students the opportunity to gain practical skills, industry insights, and valuable experience in Fullstack Development, Java, PHP, Python, and other relevant domains. Whether you're looking to specialize in a specific programming language or explore diverse areas of interest, Projectscorner is here to support you on your journey to success.</p>
    </div>
    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Projectscorner</a> All right reserved.</span>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <a href="https://www.facebook.com/projectscorner" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/projectscorner" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/projectscorner" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-instagram"></i></a>
                        <a href="https://in.linkedin.com/projectscorner" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://youtube.com/projectscorner" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-white">
                    Designed By <a class="border-bottom" href="https://s2swebsolutions.com/">S2SWeb Solutions</a>
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