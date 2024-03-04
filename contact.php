<?php
// Email configuration 
$toEmail = 'projectscorner@gmail.com';
$fromName = 'Projectscorner';
$formEmail = 'info@projectscorner.com';
$postData = $statusMsg = $valErr = '';
$status = 'error';
// If the form is submitted 
if (isset($_POST['submit'])) {
    // Get the submitted form data 
    $postData = $_POST;
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $subject = test_input($_POST['subject']);
    $message = test_input($_POST['message']);
    // Validate form fields 
    if (empty($name)) {
        $valErr .= 'Please enter your name.<br/>';
    }
    if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $valErr .= 'Please enter a valid email.<br/>';
    }
    if (empty($phone)) {
        $valErr .= 'Please enter mobile.<br/>';
    }
    if (empty($subject)) {
        $valErr .= 'Please enter subject.<br/>';
    }
    if (empty($message)) {
        $valErr .= 'Please enter your message.<br/>';
    }
    if (empty($valErr)) {
        // Send email notification to the site admin 
        //$subject = 'New contact request submitted'; 
        $htmlContent = " 
            <h2>Contact Request Details</h2> 
            <p><b>Name: </b>" . $name . "</p> 
            <p><b>Email: </b>" . $email . "</p> 
			<p><b>Mobile: </b>" . $phone . "</p> 
            <p><b>Subject: </b>" . $subject . "</p> 
            <p><b>Message: </b>" . $message . "</p> 
        ";
        // Always set content-type when sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // Header for sender info 
        $headers .= 'From:' . $fromName . ' <' . $formEmail . '>' . "\r\n";
        // Send email 
        @mail($toEmail, $subject, $htmlContent, $headers);
        $status = 'success';
        $statusMsg = '<p style="color:green;font-weight:bold;">Thank you! Your contact request has submitted successfully, we will get back to you soon.</p>';
        $postData = '';
    } else {
        $statusMsg = '<p style="color:red;font-weight:bold;">Please fill all the mandatory fields:</p>' . trim($valErr, '<br/>');
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact us - Projects Corner</title>
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
    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container pt-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="display-3  mb-4">Contact Us</h1>
                        <img src="img/contactus.jpg" width="500" class="rounded" alt="image">
                        <?php if (!empty($statusMsg)) { ?>
                            <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="contact-form  shadow border-black  rounded p-5 ">
                        <form action="" method="post">
                            <h1 class="display-6 mb-4">Do You have Any Questions?</h1>
                            <div class="row gx-4 gy-3">
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white border-black py-3 px-4" name="name" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" placeholder="Your  Name" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" class="form-control bg-white   border-black  py-3 px-4" name="email" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="Your Email" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="number" class="form-control bg-white  border-black   py-3 px-4" name="phone" value="<?php echo !empty($postData['phone']) ? $postData['phone'] : ''; ?>" maxlength="10" placeholder="Your Phone" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white    border-black  py-3 px-4" name="subject" value="<?php echo !empty($postData['subject']) ? $postData['subject'] : ''; ?>" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white  border-black py-3 px-4" rows="4" cols="10" name="message" placeholder="Your Message" required><?php echo !empty($postData['message']) ? $postData['message'] : ''; ?></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5" name="submit" value='submit' type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">Karimnagar,Telangana,AndhraPradesh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0"><a href="mailto:projectscorner@gmail.com" class="text-dark">projectscorner@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0"><a href="tel:+919392193392" class="text-dark">(+91) 9392193392</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60561.23469966969!2d79.1331482!3d18.43480505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bccd910bcf48931%3A0x4889b0398ed69f07!2sKarimnagar%2C%20Telangana!5e0!3m2!1sen!2sin!4v1709482064237!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class=" text-center p-4 rounded-bottom bg-primary">
                        <h4 class="text-white fw-bold">Follow Us</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="https://www.facebook.com/projectscorner" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/projectscorner" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/projectscorner" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                            <a href="https://in.linkedin.com/projectscorner" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://youtube.com/projectscorner" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
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