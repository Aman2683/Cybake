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
												<h6 class="mb-4">Delivered Details (FOR SNACKS AND DESSERTS)</h6>
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th scope="col">Sl.no</th>
																<th scope="col">User Details</th>
																<th scope="col">User Address</th>
																<th scope="col">Type</th>
																<th scope="col">Name</th>
																<th scope="col">Price</th>
																<th scope="col">Qty</th>
																<th scope="col">Delivered Date</th>
																<th scope="col">Total Price</th>
															</tr>
														</thead>
														<tbody>
														<?php
									include 'config.php';
									$sql1 = "SELECT snackorder.oid, snackorder.pid, snackorder.qty, snackorder.userid, snackorder.date,  snacks.id, snacks.type, snacks.name, snacks.price, snacks.descr, snacks.image, userreg.name,  userreg.address, userreg.city, userreg.pincode, userreg.landmark, userreg.phone, userreg.gender, userreg.email, snackorder.status FROM snackorder INNER JOIN snacks ON snackorder.pid=snacks.id INNER JOIN userreg on snackorder.userid=userreg.email where snackorder.deliver ='Delivered'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									if($num1 > 0)
									{ 
									while($row1 = mysqli_fetch_array($result1))
									{ 
									$sl+=1;
									$oid=$row1[0];
									$pid=$row1[1];
									$qty=$row1[2];
									$userid=$row1[3];
									$date=$row1[4];
									$id=$row1[5];
									$type=$row1[6];
									$name=$row1[7];
									$price=$row1[8];
									$descr=$row1[9];
									$image=$row1[10];
									$name=$row1[11];
									$address=$row1[12];
									$city=$row1[13];
									$pincode=$row1[14];
									$landmark=$row1[15];
									$phone=$row1[16];
									$gender=$row1[17];
									$email=$row1[18];
									$status=$row1[19];
									$total=$qty*$price;
									?>
								<tr>
									<th scope="row"><?php echo $sl;?></th>
									<td><?php echo $name; ?><br><?php echo $phone; ?><br><?php echo $email; ?><br><?php echo $gender; ?><br></td>
									<td><?php echo $address; ?><br><?php echo $city; ?><br><?php echo $landmark; ?><br><?php echo $pincode; ?></td>
									<td><?php echo $type; ?></td>
									<td><?php echo $name; ?></td>
									<td><?php echo $price; ?></td>
									<td><?php echo $qty; ?></td>
									<td><?php echo $date; ?></td>
									<td><?php echo $total; ?></td>
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
								
								
								
								<div class="row g-4">
								 <div class="container-fluid pt-4 px-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="bg-light rounded h-100 p-4">
												<h6 class="mb-4">Delivered Details (FOR DESIGN)</h6>
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
															</tr>
														</thead>
														<tbody>
														<?php
									include 'config.php';
									$sql1 = "SELECT designorder.*, userreg.* FROM designorder INNER JOIN userreg ON designorder.userid=userreg.email where designorder.deliver ='Delivered'";
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
									$deliver=$row1['deliver'];
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
	foreach ($_POST['did'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query1 = "delete from user where id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script>
				alert('Deleted...');
			</script>";
	echo "<script> location.href='user.php'; </script>";
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