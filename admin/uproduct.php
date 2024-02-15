<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CYBAKE - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Content End -->
<?php include 'header.php'; ?>

<?php
						if(isset($_GET['uid']))
							{
								$upid=$_GET['uid'];
								include 'config.php';
								$sql1 = "select * from product where id='".$upid."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$cat=$row1[1];
								$flavour=$row1[2];
								$halfkg=$row1[3];
								$onekg=$row1[4];
								$descr=$row1[5];
								}	
								?>
           
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">                        
					<div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Product</h6>
                            <form action="#" method="post" enctype="multipart/form-data">
                                
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="cat" value="<?php echo $cat; ?>" readonly class="form-control" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Flavour</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="flavour" value="<?php echo $flavour; ?>" readonly class="form-control" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">1/2 KG (Amount)</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="halfkg" value="<?php echo $halfkg; ?>" class="form-control" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">1 KG (Amount)</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="onekg" class="form-control" value="<?php echo $onekg; ?>" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="descr" value="<?php echo $descr; ?>" class="form-control" id="price">
                                    </div>
                                </div>
                                <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
								
								<hr>
								</form>
								
					<?php
								}
							}
							
if(isset($_POST['update']))
{
	error_reporting(1);
	include("config.php");
		
		$halfkg=$_POST['halfkg'];
		$onekg=$_POST['onekg'];
		$descr=$_POST['descr'];
		
		$query = "update product set halfkg='".$halfkg."',onekg='".$onekg."',descr='".$descr."' where id='".$upid."'";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
			
		echo "<script>
				alert('Updated Successfully...');
			</script>";
			echo "<script> location.href='addproduct.php'; </script>";
			
}
?>		
								
								
								</div>
                        </div>
                    </div>
                  


            <?php include 'footer.php' ;?>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>