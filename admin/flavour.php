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
<?php include 'header.php'; ?>


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ADD FLAVOUR</h6>
							<form action="#" method="post" >
							<div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Type Flavour </label>
                                    <div class="col-sm-3">
                                        <input name="flavour" type="text" class="form-control" id="shopname" placeholder="flavour" required>
                                    </div>
                                </div>
								
							<button type="submit" name="enter" class="btn btn-sm btn-primary">Enter</button>
							</form>
							<?php

if(isset($_POST['enter']))
{
	error_reporting(1);
	include("config.php");
	
		
		$flavour=$_POST['flavour'];
		
		$query = "insert into flavour(flavour) values ('".$flavour."')";
		
		mysqli_query($con, $query) or die(mysqli_error($con));
		
		echo "<script>
			alert('Flavour added,');
			</script>";
			echo "<script> location.href='flavour.php'; </script>";
	
}
?>
							<hr>
							
					 <div class="container-fluid pt-4 px-4">
						<div class="row g-4">
							<div class="col-12">
								<div class="bg-light rounded h-100 p-4">
									<h6 class="mb-4">Added Flavour</h6>
									<div class="table-responsive">
										<table class="table">
											<thead>
											
											
												<tr>
													<th scope="col">Sl.no</th>
													<th scope="col">flavour</th>
													<th scope="col">Delete</th>
													<th></th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
												<?php
													include 'config.php';
													$sql1 = "select * from flavour";
													$result1 = mysqli_query($con,$sql1);
													$num1=mysqlI_num_rows($result1);
													$sl=0;
													if($num1 > 0)
													{ 
													while($row1 = mysqli_fetch_array($result1))
													{ 
													$sl+=1;
													$id=$row1[0];
													$flavour=$row1[1];
													?>
													<th scope="row"><?php echo $sl; ?></th>
													<td><?php echo $flavour; ?></td>
													<td>
													<form action="#" method="post">
													<input type="text" name="did[]" value="<?php echo $id; ?>" hidden="true"><button type="submit" name="delete" class="btn btn-primary">Delete</button>
													</form>
													</td>
												</tr>
												<?php
													}
													}
													?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>		
							
						<?php
if(isset($_POST['delete']))
{
	foreach ($_POST['did'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query1 = "delete from flavour where id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='flavour.php'; </script>";
}
?>	
							
					

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