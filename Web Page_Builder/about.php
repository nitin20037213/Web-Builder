<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form
   
	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>About</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>



<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">

                <!--  image logo -->
                <span><a href="index.html"><img src="assets/img/sym.jpg" class="img-fluid"></a></span>

                <a href="about.php"><img src="assets/img/bc.jpg" class="img-fluid1"></a>

                <h1 class="text-light"><a href="about.php">Black.Co_Productions</a></h1>

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="templates.html" target="_blank">Templates</a></li>
                    <li class="dropdown"><a href="#">About<i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>About Us</h2>

                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ol>
            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= Our Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <b>
            <h2>Our Motives</h2>
          </b>

                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="assets/img/skills-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>These skills are learned by us from internet.</h3>

                        <p>
                            The main motive for the website is to provide you the website building in more convenient way.
                        </p>


        </section>
        <!-- End Our Skills Section -->





        <!-- comment section -->
        <div class="comment">COMMENTS</div>
        <div class="wrapper">
            <form action="" method="POST" class="form">
                <div class="row">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                    </div>
                </div>
                <div class="input-group textarea">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Post Comment</button>
                </div>
            </form>
            <div class="prev-comments">
                <?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
            
			if (mysqli_num_rows($result) >0) {
				while ($row = mysqli_fetch_assoc($result)) {


			?>
                <div class="single-item">
                    <h4>
                        <?php echo $row['name']; ?>
                    </h4>
                    <a href="mailto:<?php echo $row['email']; ?>">
                        <?php echo $row['email']; ?>
                    </a>
                    <p>
                        <?php echo $row['comment']; ?>
                    </p>
                </div>
                <?php

				}
			}
			
			?>
            </div>
        </div>

    </main>
    <!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <a href="about.php"><img src="assets/img/bc1.jpg" class="img-fluid1"></a>
                        <h3>Web Builder</h3>
                        <p>I have made this as a college project.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="privacy.html">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Me</h4>
                        <p>
                            Zakir B <br> Chandigarh University<br> India <br>
                            <strong>Phone:</strong> +91 6230167569<br>
                            <strong>Email:</strong> nitin@gmail.com<br>
                        </p>

                        <div class="social-links">

                            <a href="https://www.instagram.com/the_nitin_thakur_/" class="instagram"><i
                  class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/nitin-thakur-0322151b1" class="linkedin"><i
                  class="bi bi-linkedin"></i></a>
                        </div>

                    </div>


                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Website_Builder</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">

                            Designed by <a href="about.php">NITIN THAKUR</a>
                        </div>
                    </div>

                    <div id="sfcrzat5p8s98hxwqe7tla4qljlmuu871g8"></div>

                    <div class="counter">
                        <div class="right">
                            <script type="text/javascript" src="https://www.counters-free.net/count/a8kp"></script><br>
                            <a href='https://healthnewsnet.de/'>.</a>
                            <script type='text/javascript' src='https://www.whomania.com/ctr?id=42ca4d3bd5c33af6eb6eda5d9a827e006c232079'></script>
                        </div>


    </footer>
    <!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>