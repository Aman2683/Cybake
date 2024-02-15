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

           
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
				 <div class="container-fluid pt-4 px-4">
					<div class="row g-4">
						<div class="col-12">
							<div class="bg-light rounded h-100 p-4">
								<h6 class="mb-4">Pending Designs</h6>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">Sl.no</th>
												<th scope="col">User Details</th>
												<th scope="col">User Address</th>
												<th scope="col">Type</th>
												<th scope="col">Flavour</th>
												<th scope="col">KG</th>
												<th scope="col">Delivered Date</th>
												<th scope="col">Order Date</th>
												<th scope="col">Message</th>
												<th scope="col">Action</th>
												<th></th>  
											</tr>
										</thead>
										<tbody>
										<?php
									include 'config.php';
									$sql1 = "SELECT designorder.*, userreg.* FROM designorder INNER JOIN userreg ON designorder.userid=userreg.email where designorder.status !='Rejected' and designorder.deliver !='Delivered'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									if($num1 > 0)
									{ 
									while($row1 = mysqli_fetch_array($result1))
									{ 
									$sl+=1;
									$id=$row1['id'];
									$pid=$row1['pid'];
									$type=$row1['type'];
									$flavour=$row1['flavour'];
									$kg=$row1['kg'];
									$date=$row1['date'];
									$orderdate=$row1['orderdate'];
									$msg=$row1['message'];
									$status=$row1['status'];
									$name=$row1['name'];
									$addr=$row1['address'];
									$city=$row1['city'];
									$pincode=$row1['pincode'];
									$landmark=$row1['landmark'];
									$phone=$row1['phone'];
									$gender=$row1['gender'];
									$email=$row1['email'];
									?>
								<tr>
									<th scope="row"><?php echo $sl;?></th>
									<td><?php echo $name; ?><br><?php echo $phone; ?><br><?php echo $email; ?><br><?php echo $gender; ?><br></td>
									<td><?php echo $addr; ?><br><?php echo $city; ?><br><?php echo $landmark; ?><br><?php echo $pincode; ?></td>
									<td><?php echo $type; ?></td>
									<td><?php echo $flavour; ?></td>
									<td><?php echo $kg; ?></td>
									<td><?php echo $date; ?></td>
									<td><?php echo $orderdate; ?></td>
									<td><?php echo $msg; ?></td>
									<td>
									<form action="#" method="post">
									<input type="text" name="did[]" value="<?php echo $id; ?>" hidden="true">
									<?php if($status==''){?>
									<button type="submit" name="delete" class="btn btn-primary" name="submit">Reject</button>
									<button type="submit" name="accept" class="btn btn-primary" name="submit">Accept</button>
									<?php } else if($status=='Accepted'){?>
									Accepted
									<?php } else { ?>
									Rejected
									<?php } ?>
									</form>
									</td>
									<td>
									<form action="#" method="post">
									<input type="text" name="uid[]" value="<?php echo $id; ?>" hidden="true">
									<button type="submit" name="deliver" class="btn btn-primary" name="submit">Deliver</button>
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
								</div>
                        </div>
                    
                    <?php
if(isset($_POST['delete']))
{
	$status='Rejected';
	foreach ($_POST['did'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query1 = "update designorder set status='".$status."' where id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script>
				alert('Rejected...');
			</script>";
	echo "<script> location.href='pending.php'; </script>";
}
?>

                    <?php
if(isset($_POST['accept']))
{
	$status='Accepted';
	foreach ($_POST['did'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query12 = "update designorder set status='".$status."' where id='".$selectid."'";
	mysqli_query($con,$query12) or die(mysqli_error($con));
	echo "<script>
				alert('Accepted...');
			</script>";
	echo "<script> location.href='pending.php'; </script>";
}
?>

                    <?php
if(isset($_POST['deliver']))
{
	$status='Delivered';
	foreach ($_POST['uid'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query12 = "update designorder set deliver='".$status."' where id='".$selectid."'";
	mysqli_query($con,$query12) or die(mysqli_error($con));
	echo "<script>
				alert('Delivered...');
			</script>";
	echo "<script> location.href='pending.php'; </script>";
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