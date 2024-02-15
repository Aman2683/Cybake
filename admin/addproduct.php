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
                            <h6 class="mb-4">Add Product</h6>
                            <form action="#" method="post" enctype="multipart/form-data">
							
								<div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Select Category</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="cat" required >
										<option value="">Select Category</option>
										<?php
													include 'config.php';
													$sql1 = "select * from cat";
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
													?>
										<option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
													<?php } }?>
										</select>
                                    </div>
                                </div>
								
								<div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Select Flavour</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="flavour" required >
										<option value="">Select Flavour</option>
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
										<option value="<?php echo $flavour; ?>"><?php echo $flavour; ?></option>
													<?php
													}}
													?>
										</select>
                                    </div>
                                </div>
                                
								
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-3">
                                        <input type="file" class="form-control" name="image" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">1/2 KG (Amount)</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="halfkg" class="form-control" id="price">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">1 KG (Amount)</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="onekg" class="form-control" id="price">
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
	
		$cat=$_POST['cat'];
		$flavour=$_POST['flavour'];
		$halfkg=$_POST['halfkg'];
		$onekg=$_POST['onekg'];
		$descr=$_POST['descr'];
		$fname = $_FILES["image"]["name"];
		$filename = $cat.$fname;
		$tempname = $_FILES["image"]["tmp_name"];   
        $folder = "image/".$filename;
            if (move_uploaded_file($tempname, $folder))  {
		
		$query = "insert into product(cat,flavour,halfkg,onekg,descr,image) values('".$cat."','".$flavour."','".$halfkg."','".$onekg."','".$descr."','".$filename."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		echo "<script>
				alert('added successfully...');
			</script>";
			echo "<script> location.href='addproduct.php'; </script>";
	}else{
            echo "<script>
					alert('Upload Failed, IMAGE should be less than 2GB');
				</script>";
				echo "<script> location.href='addproduct.php'; </script>";
      }
}
?>
								
								 <div class="container-fluid pt-4 px-4">
									<div class="row g-4">
										<div class="col-12">
											<div class="bg-light rounded h-100 p-4">
												<h6 class="mb-4">Add Product Details</h6>
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th scope="col">Sl.no</th>
																<th scope="col">Cake Category</th>
																<th scope="col">Cake Flavour</th>
																<th scope="col">Half KG Amount</th>
																<th scope="col">One KG Amount</th>
																<th scope="col">Description</th>
																<th scope="col">Image</th>
																<th></th>  
																<th></th>
															</tr>
														</thead>
														<tbody>
														<?php
								include 'config.php';
								$sql1="select * from product";
								$result1=mysqli_query($con,$sql1);
								$num1=mysqli_num_rows($result1);
								$sl=0;
								if($num1>0)
								{
									while($row1=mysqli_fetch_array($result1))
									{
										$sl+=1;
										$id=$row1[0];
										$cat=$row1['cat'];
										$flavour=$row1['flavour'];
										$halfkg=$row1['halfkg'];
										$onekg=$row1['onekg'];
										$descr=$row1['descr'];
										$image=$row1['image'];
								?>
															<tr>
																<th scope="row"><?php echo $sl;?></th>
																<td><?php echo $cat; ?></td>
																<td><?php echo $flavour; ?></td>
																<td><?php echo $halfkg; ?></td>
																<td><?php echo $onekg; ?></td>
																<td><?php echo $descr; ?></td>
																<td><img src="image/<?php echo $image; ?>" style="height:100px;width:100px;"></td>
																
																<td><a href="uproduct.php?uid=<?php echo $id; ?>" class="btn btn-primary" name="submit">Update</a></td>
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
	$query1 = "delete from product where id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script>
				alert('Deleted...');
			</script>";
	echo "<script> location.href='addproduct.php'; </script>";
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