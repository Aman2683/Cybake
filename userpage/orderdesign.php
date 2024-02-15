<?php
session_start();
if(isset($_SESSION['cakeuser']))
{
	$cakeuser=$_SESSION['cakeuser'];
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>CYBAKE - user</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!--<link href="img/feature.jpg" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Mangalore</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.30 AM - 06.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 9090909090</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">CYBAKE</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="product.php" class="nav-item nav-link ">Cake Designs</a>
                <a href="snacks.php" class="nav-item nav-link">Snacks and Desserts</a>
				<a href="cart.php" class="nav-item nav-link">View Invoice </a>
				<a href="myorder.php" class="nav-item nav-link">My Order</a>
                <a href="contact.php" class="nav-item nav-link active">My Feedback</a>
				<a href="logout.php" class="nav-item nav-link">LOGOUT</a>
				
                
           
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Order Your Design</h1>
                        </div>
            <?php
			include 'config.php';
			$sql1="select * from product where id='".$id."'";			   
			$result1=mysqli_query($con,$sql1);
			$num1=mysqli_num_rows($result1);
			$sI=0;
			if($num1>0)
			{
				while($row1=mysqli_fetch_array($result1))
				{
					$sI+=1;
					$id=$row1[0];
					$cat=$row1[1];
					$flavour=$row1[2];
					$halfkg=$row1[3];
					$onekg=$row1[4];
					$descr=$row1[5];
					$image=$row1[6];
				}
			}
			?>
                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" value="<?php echo $cat; ?>" name="cat" class="form-control" id="name" placeholder="Your Name" readonly>
                                        <label for="name">Cake Type</label>
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" value="<?php echo $flavour; ?>" name="flavour" class="form-control" id="name" placeholder="Your Name" readonly>
                                        <label for="name">Cake Flavour</label>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="kg" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">KG</label>
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" name="ddate" class="form-control" id="name" placeholder="Your Name" value="" >
                                        <label for="name">Delivered Date</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button name="add" class="btn btn-primary w-100 py-3"  type="submit">Send Message</button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
					<img class="img-fluid position-absolute w-100 h-100" src="../admin/image/<?php echo $image; ?>" alt="" style="object-fit: cover;" frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0">
                    </div>
                </div>
				</form>
										<?php

if(isset($_POST['add']))
{

	error_reporting(1);
	include("config.php");
		
		$cat=$_POST['cat'];
		$flavour=$_POST['flavour'];
		$kg=$_POST['kg'];
		$ddate=$_POST['ddate'];
		$Message=$_POST['message'];
		
		$query = "insert into designorder(pid,type,flavour,kg,date,message,userid) values ('".$id."','".$cat."','".$flavour."','".$kg."','".$ddate."','".$Message."','".$_SESSION['cakeuser']."')";
		
		mysqli_query($con, $query) or die(mysqli_error($con));
		
		echo "<script>
			alert('Add My Order');
			</script>";
			echo "<script> location.href='product.php'; </script>";
	
}
?>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
	    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
				<div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">About Us</h4>
					<p>
					CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE CYCAKE 
					</p>  
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
					<li><a class="btn btn-link" href="index.php">Home</a></i>
                    <li><a class="btn btn-link" href="about.php">About Us</a></li>
                    <li><a class="btn btn-link" href="product.php">Products</a></li>
                    <li><a class="btn btn-link" href="login.php">Login</a></li>   
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Mangalore</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9090909090</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ;?>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
}
else
{
	echo "<script> location.href='../login.php'; </script>";
}	
?>