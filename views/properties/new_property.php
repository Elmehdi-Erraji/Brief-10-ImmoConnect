<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Property</title>
	 <!-- fonts -->
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&family=Outfit:wght@200;300;500;700&family=Roboto&display=swap" rel="stylesheet">
	 <!-- bootstrap css cdn -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	 <!-- css file -->
	 <style>
		.full-row {
			background-color: #f8f9fa; /* Add your desired background color */
			padding: 20px;
		}
	
		.container {
			margin: 0 auto;
		}
	
		h2.text-secondary.double-down-line {
			color: #007bff; /* Add your desired text color */
			border-bottom: 2px solid #007bff; /* Add your desired border color */
			padding-bottom: 10px;
			margin-bottom: 30px;
		}
	
		.row.p-5.bg-white {
			background-color: #fff; /* Add your desired background color */
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add your desired box shadow */
		}
	
		.form-control {
			margin-bottom: 15px;
		}
	
		/* Add more styles as needed for other elements */
	</style>
</head>
<body>

<!--	Submit property   -->
<div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form action="insert" method="POST" enctype="multipart/form-data">
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
								
									
										<div class="row">
											<div class="col-xl-12">
											<div class="form-group row">
													<label class="col-lg-3 col-form-label">Adress</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="adress" required placeholder="Enter Adress">
													</div>
											</div>		
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Surface</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="surface" required placeholder="Enter Surface">
													</div>
												</div>
												<div class="form-group row">
														<label class="col-lg-3 col-form-label">Room</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="room" required placeholder="Enter Rooms (only no 1 to 10)">
														</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Shower</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="shower" required placeholder="Enter Shower (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required placeholder="Enter Price">
													</div>
												</div>
										
											
											
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="type">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
													</div>
											
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Description</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="description" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
											
												
												
											
										
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
											
											
											
											</div>
										
										</div>
										
										
												
										 <h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="image1" type="file" accept="image/png, image/gif, image/jpeg" >
													</div>
												</div>

											

												
												</div>
												<!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Basement Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" required="">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Ground Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file">
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required name="isFeatured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div> --> 
										<button class="btn btn-info " type="submit" name="submit" >Submit</button>
										
											
										
								</div>
								</form>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->



    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>