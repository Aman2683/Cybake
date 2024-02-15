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
                    <div class="col-sm-12 col-xl-12">                        
					<div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Snacks And Desserts</h6>
                            <form action="#" method="post" enctype="multipart/form-data">
							
								
                                
								
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Upload Image</label>
                                    <div class="col-sm-3">
                                        <input type="file" class="form-control" name="image" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Select Type</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="type" >
										<option value="Snacks">Snacks</option>
										<option value="Desserts">Desserts</option>
										</select>
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Snacks Or Desserts Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="name" class="form-control" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="price" class="form-control" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="descr" class="form-control" id="price">
                                    </div>
                                </div>
                                <button type="submit" name="add" class="btn btn-primary">Enter</button>
								
								<hr>
								</form>
								
<?php
if(isset($_POST['add']))
{
	error_reporting(1);
	include("config.php");
	
		$type=$_POST['type'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$descr=$_POST['descr'];
		$fname = $_FILES["image"]["name"];
		$filename = $type.$fname;
		$tempname = $_FILES["image"]["tmp_name"];   
        $folder = "image/".$filename;
            if (move_uploaded_file($tempname, $folder))  {
		
		$query = "insert into snacks(type,name,price,descr,image) values('".$type."','".$name."','".$price."','".$descr."','".$filename."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		echo "<script>
				alert('added successfully...');
			</script>";
			echo "<script> location.href='snacks.php'; </script>";
	}else{
            echo "<script>
					alert('Upload Failed, IMAGE should be less than 2GB');
				</script>";
				echo "<script> location.href='snacks.php'; </script>";
      }
}
?>
								
								 <div class="container-fluid pt-4 px-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="bg-light rounded h-100 p-4">
												<h6 class="mb-4">Add Snacks And Desserts Details</h6>
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th scope="col">Sl.no</th>
																<th scope="col">Type</th>
																<th scope="col">Name</th>
																<th scope="col">Amount</th>
																<th scope="col">Description</th>
																<th scope="col">Image</th>
																<th></th>  
																<th></th>
															</tr>
														</thead>
														<tbody>
														<?php
								include 'config.php';
								$sql1="select * from snacks";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sl=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sl+=1;
										$id=$row1[0];
										$type=$row1['type'];
										$name=$row1['name'];
										$price=$row1['price'];
										$descr=$row1['descr'];
										$image=$row1['image'];
								?>
															<tr>
																<th scope="row"><?php echo $sl;?></th>
																<td><?php echo $type; ?></td>
																<td><?php echo $name; ?></td>
																<td><?php echo $price; ?></td>
																<td><?php echo $descr; ?></td>
																<td><img src="image/<?php echo $image; ?>" style="height:100px;width:100px;"></td>
																
																<td><a href="usnacks.php?uid=<?php echo $id; ?>" class="btn btn-primary" name="submit">Update</a></td>
																<td>
																<form action="#" method="post">
																<input type="text" name="did[]" value="<?php echo $id; ?>" hidden="true">
																<button type="submit" name="delete" class="btn btn-primary" name="submit">Delete</button>
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
                    </div>
                    <?php
if(isset($_POST['delete']))
{
	foreach ($_POST['did'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query1 = "delete from snacks where id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script>
				alert('Deleted...');
			</script>";
	echo "<script> location.href='snacks.php'; </script>";
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