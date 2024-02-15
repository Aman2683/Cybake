<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nut Agri - Admin</title>
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

           
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">                        
					<div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Supari Rate</h6>
                            <form action="#" method="post">
								<!--Dropdown-->
								<div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-3">
                                        <select  class="form-control" name="quality">
										<option hidden>Select Quality</option>
										<?php 
							        include('config.php');
							        $q=mysqli_query($con,"select * from quality")or die(mysqli_query($con));
							        while($row=mysqli_fetch_array($q)){
							        	?>
							        	<option value="<?php echo $row['quality'];?>"><?php echo $row['quality'];?></option>
							        	<?php
							        }
							        ?>
										</select>
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Rate</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="rate" class="form-control" id="price">
                                    </div>
                                </div>
                                <button type="submit" name="enter" class="btn btn-primary">Enter</button>
                            </form>
<?php
if(isset($_POST['enter']))
{
	error_reporting(1);
	include("config.php");
	$quality=$_POST['quality'];
	$rate=$_POST['rate'];
	$sql="select * from suparirate where quality='".$quality."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);
	if ($count > 0)
	{
		$sql2 = "update suparirate set rate='".$rate."' where quality='".$quality."'";
		$result2 = mysqli_query($con,$sql2);	
		echo "<script>
				alert('Quality Rate Updated');
			</script>";
			echo "<script> location.href='Suparirates.php'; </script>";
	}
	else
	{
	$query = "insert into suparirate(quality,rate) values ('".$quality."','".$rate."')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	
	echo "<script>
	alert('Supari Rates Added');
	</script>";
	echo "<script> location.href='Suparirates.php'; </script>";
	}
}
?>
								<hr>
								 <div class="container-fluid pt-4 px-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="bg-light rounded h-100 p-4">
												<h6 class="mb-4">Supari Rates</h6>
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th scope="col">Sl.no</th>
																<th scope="col">Category</th>
																<th scope="col">Rate</th>
																<th></th>  
															</tr>
														</thead>
														<tbody>
														
														<?php
										include 'config.php';
										$sql1 = "select * from suparirate";
										$result1 = mysqli_query($con,$sql1);
										$num1=mysqlI_num_rows($result1);
										$sl=0;
										if($num1 > 0)
										{ 
										while($row1 = mysqli_fetch_array($result1))
										{ 
										$sl+=1;
										$id=$row1[0];
										$quality=$row1[1];
										$rate=$row1[2];
										?>
										<tr>
											<th scope="row"><?php echo $sl; ?></th>
											<td><?php echo $quality; ?></td>
											<td><?php echo $rate; ?></td>
											<td><button type="submit" class="btn btn-primary" name="delete">delete</button></td>
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