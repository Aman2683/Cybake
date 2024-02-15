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
<?php include 'header.php'; ?>


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Added Amount</h6>
							
							
								<div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Shop Name</label>
                                    <div class="col-sm-3">
                                        <select  class="form-control" id="location">
										<option hidden></option>
										<?php 
							        include('config.php');
							        $q=mysqli_query($con,"select * from shop")or die(mysqli_query($con));
							        while($row=mysqli_fetch_array($q)){
							        	?>
							        	<option value="<?php echo $row['loginid'];?>"><?php echo $row['loginid'];?></option>
							        	<?php
							        }
							        ?>
										</select>
                                    </div>
                                </div>
						
								<div class="row mb-3">
                                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>
								<div class="row mb-3">
                                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-3">
                                        <input type="time" class="form-control" id="time">
                                    </div>
                                </div>
								
								<div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="amount">
                                    </div>
                                </div>
								
							<a class="btn btn-sm btn-primary" href="">Cancel</a>
							<a class="btn btn-sm btn-primary" href="">Upload</a>
							
							<hr>
							
							 <div class="container-fluid pt-4 px-4">
								<div class="row g-4">
									<div class="col-12">
										<div class="bg-light rounded h-100 p-4">
											<h6 class="mb-4">Amount Added Details</h6>
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th scope="col">Sl.no</th>
															<th scope="col">Shop Name</th>
															<th scope="col">Date</th>
															<th scope="col">Amount</th>
															<th></th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>nutagrishop01</td>
															<td>07-06-2022</td>
															<td>500000</td>
															<td><button type="submit" class="btn btn-primary" name="submit">Delete</button></td>
															
														</tr>
														
														<tr>
															<th scope="row">2</th>
															<td>nutagrishop02</td>
															<td>07-06-2022</td>
															<td>1000000</td>
															<td><button type="submit" class="btn btn-primary" name="submit">Delete</button></td>
															
														</tr>
														
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>		
							
							
							
					

            <?php include 'footer.php' ;?>
			
        </div>
		  <
		
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