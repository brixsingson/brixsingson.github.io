<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTFF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Website</title>
  <!-- Added Stylesheet -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!-- JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <!-- Inline Style -->
  <style>
    .wrapper {
        width: 600px;
        margin: 0 auto;
    }

    table tr td:last-child {
        width: 120px;
    }
  </style>
  <style>
    .floating-form {
        position: fixed;
        top: 50%; /* Adjust this value to set the vertical position */
        left: 50%; /* Adjust this value to set the horizontal position */
        transform: translate(-50%, -50%);
        background-color: #f0f0f0;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
  <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
 </head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="images/profile.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Brianne Singson</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="covid19-form.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Covid-19 Form</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->



<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
require_once "variables.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//Validation.php
require_once "validation.php";

    // Check input errors before inserting in database
    if (empty($name_err) && empty($gender_err) && empty($mobile_err) && empty($age_err) && empty($body_temp_err) && empty($covid_diagnosed_err) && empty($covid_encounter_err) && empty($vaccinated_err) && empty($nationality_err)) {
        
        // Prepare an insert statement
        $sql = "INSERT INTO covid_data (name, gender, mobile, age, body_temp, covid_diagnosed, covid_encounter, vaccinated, nationality) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
           
            
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $param_name, $param_gender, $param_mobile, $param_age, $param_body_temp, $param_covid_diagnosed, $param_covid_encounter, $param_vaccinated, $param_nationality);

            // Set parameters
            $param_name = $name;
            $param_gender = $gender;
            $param_mobile = $mobile;
            $param_age = $age;
            $param_body_temp = $body_temp;
            $param_covid_diagnosed = $covid_diagnosed;
            $param_covid_encounter = $covid_encounter;
            $param_vaccinated = $vaccinated;
            $param_nationality = $nationality;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: covid19-form.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
       mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="floating-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add your COVID-19 record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    
                    <!-- Form for Name -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_name; ?>">
                        <span class="invalid-feedback"><?php echo $name_err; ?></span>
                    </div>

                    <!-- Form for Gender -->
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" name="gender" class="form-control <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_gender; ?>">
                        <span class="invalid-feedback"><?php echo $gender_err; ?></span>
                    </div>

                    <!-- Form for Mobile Number -->
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" class="form-control <?php echo (!empty($mobile_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_mobile; ?>">
                        <span class="invalid-feedback"><?php echo $mobile_err; ?></span>
                    </div>

                    <!-- Form for Age -->
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" name="age" class="form-control <?php echo (!empty($age_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_age; ?>">
                        <span class="invalid-feedback"><?php echo $age_err; ?></span>
                    </div>

                    <!-- Form for Body Temperature -->
                    <div class="form-group">
                        <label>Body Temperature</label>
                        <input type="text" name="body_temp" class="form-control <?php echo (!empty($body_temp_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_body_temp; ?>">
                        <span class="invalid-feedback"><?php echo $body_temp_err; ?></span>
                    </div>

                    <!-- Form for COVID-19 Diagnosed -->
                    <div class="form-group">
                        <label>COVID-19 Diagnosed</label>
                        <input type="text" name="covid_diagnosed" class="form-control <?php echo (!empty($covid_diagnosed_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_covid_diagnosed; ?>">
                        <span class="invalid-feedback"><?php echo $covid_diagnosed_err; ?></span>
                    </div>

                    <!-- Form for COVID-19 Encounter -->
                    <div class="form-group">
                        <label>COVID-19 Encounter</label>
                        <input type="text" name="covid_encounter" class="form-control <?php echo (!empty($covid_encounter_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_covid_encounter; ?>">
                        <span class="invalid-feedback"><?php echo $covid_encounter_err; ?></span>
                    </div>

                    <!-- Form for Vaccinated -->
                    <div class="form-group">
                        <label>Vaccinated</label>
                        <input type="text" name="vaccinated" class="form-control <?php echo (!empty($vaccinated_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_vaccinated; ?>">
                        <span class="invalid-feedback"><?php echo $vaccinated_err; ?></span>
                    </div>

                    <!-- Form for Nationality -->
                    <div class="form-group">
                        <label>Nationality</label>
                        <input type="text" name="nationality" class="form-control <?php echo (!empty($nationality_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $param_nationality; ?>">
                        <span class="invalid-feedback"><?php echo $nationality_err; ?></span>
                    </div>

                    
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>My Portfolio</span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
      Powered by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>