<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties list</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&family=Outfit:wght@200;300;500;700&family=Roboto&display=swap" rel="stylesheet">
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="/public/css/listings-style.css">
</head>

<body>
    <main>

    <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid" style="background-image:url('/public/imgs/cover-imgs.jpg');background-size: cover;background-position: center;height: 70vh;display: flex; align-items: center;">
            <div class="container">
                <h1 class=" text-white text-center p-4" style="font-size:32px;font-family:roboto">Find Your Dream House</h1>
                <div class="container-fluid  mb-5 ">
                    <div class="container">
                        <div class="row gx-1 ">
                            <div class="col-md-8 " style="margin-left:auto;">
                                <div class="row gx-1   ">

                                    <div class="col-md-6 ">
                                        <input type="text" class="form-control border-0 " style="border-radius:5px ;" placeholder="Search Keyword">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select border-0" style="border-radius: 5px;">
                                            <option selected>All categories</option>
                                            <option value="1">Category 1</option>
                                            <option value="2">Category 2</option>
                                            <option value="3">Category 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary border-0 w-100 " style="border-radius:5px;"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- property-cards-start -->
    
        <div class="container py-5   ">
            <div class="tab-content ">
                <div  class=" p-0  ">
                    <div class="row ">
                        <!-- card -->
                        <div class="col-lg-4 col-md-6 mx-2 my-4 " style="border-radius: 15px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);max-width: 360px;">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><imgs class="imgs-fluid" src="/public/imgs/house-imgs-1.webp" alt="property image" id="zoom" ></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <div class="bg-custom-color rounded text-white d-inline-block" style="background-color: #1874A2">House</div>
                                    <a class="d-block h5 mb-2 mt-2" href="" style="color:#1874A2; text-decoration:none">Ample Apartment At Last Floor</a>
                                    <p><i class="fa fa-map-marker-alt  me-2" style="color:#1874A2"></i>West flaminggo road, las vegas</p>
                                    <div>
                                        <small class="flex-fill  mx-2 py-2">Baths</small>
                                        <small class="flex-fill  mx-2 py-2">Rooms</small>
                                        <small class="flex-fill  mx-2 py-2">Beds</small>
                                        <small class="flex-fill  mx-2 py-2">Area</small>
                                    </div>
                                    <div class="pb-3">
                                        <small class="flex-fill text-center mx-2 py-2 "><i class="fa fa-bath  me-2" style="color:#1874A2"></i>2</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa-solid fa-door-open " style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa fa-bed  me-2" style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  py-2"><i class="fa fa-ruler-combined  me-2" style="color:#1874A2"></i>100 m²</small>
                                    </div>

                                </div>
                                <div class="d-flex border-top p-3">
                                    <h5 class="  px-3" style="color:#1874A2">Tom Willson</h5>
                                    <h5 class=" px-5" style="color:#1874A2">$350.000</h5>
                                </div>
                            </div>
                        </div>

                         <!-- card -->

                        <div class="col-lg-4 col-md-6 mx-2 my-4" style="border-radius: 15px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);max-width: 360px;">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><imgs class="imgs-fluid" src="/public/imgs/house-imgs-1.webp" alt="property image" id="zoom"></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <div class="bg-custom-color rounded text-white d-inline-block" style="background-color: #1874A2">House</div>
                                    <a class="d-block h5 mb-2 mt-2" href="" style="color:#1874A2; text-decoration:none">Ample Apartment At Last Floor</a>
                                    <p><i class="fa fa-map-marker-alt  me-2" style="color:#1874A2"></i>West flaminggo road, las vegas</p>
                                    <div>
                                        <small class="flex-fill  mx-2 py-2">Baths</small>
                                        <small class="flex-fill  mx-2 py-2">Rooms</small>
                                        <small class="flex-fill  mx-2 py-2">Beds</small>
                                        <small class="flex-fill  mx-2 py-2">Area</small>
                                    </div>
                                    <div class="pb-3">
                                        <small class="flex-fill text-center mx-2 py-2 "><i class="fa fa-bath  me-2" style="color:#1874A2"></i>2</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa-solid fa-door-open " style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa fa-bed  me-2" style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  py-2"><i class="fa fa-ruler-combined  me-2" style="color:#1874A2"></i>100 m²</small>
                                    </div>

                                </div>
                                <div class="d-flex border-top p-3">
                                    <h5 class="  px-3" style="color:#1874A2">Tom Willson</h5>
                                    <h5 class=" px-5" style="color:#1874A2">$350.000</h5>
                                </div>
                            </div>
                        </div>


                         <!-- card -->

                        <div class="col-lg-4 col-md-6 mx-2 my-4" style="border-radius: 15px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);max-width: 360px;">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><imgs class="imgs-fluid" src="/public/imgs/house-imgs-1.webp" alt="property image" id="zoom"></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <div class="bg-custom-color rounded text-white d-inline-block" style="background-color: #1874A2">House</div>
                                    <a class="d-block h5 mb-2 mt-2" href="" style="color:#1874A2; text-decoration:none">Ample Apartment At Last Floor</a>
                                    <p><i class="fa fa-map-marker-alt  me-2" style="color:#1874A2"></i>West flaminggo road, las vegas</p>
                                    <div>
                                        <small class="flex-fill  mx-2 py-2">Baths</small>
                                        <small class="flex-fill  mx-2 py-2">Rooms</small>
                                        <small class="flex-fill  mx-2 py-2">Beds</small>
                                        <small class="flex-fill  mx-2 py-2">Area</small>
                                    </div>
                                    <div class="pb-3">
                                        <small class="flex-fill text-center mx-2 py-2 "><i class="fa fa-bath  me-2" style="color:#1874A2"></i>2</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa-solid fa-door-open " style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa fa-bed  me-2" style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  py-2"><i class="fa fa-ruler-combined  me-2" style="color:#1874A2"></i>100 m²</small>
                                    </div>

                                </div>
                                <div class="d-flex border-top p-3">
                                    <h5 class="  px-3" style="color:#1874A2">Tom Willson</h5>
                                    <h5 class=" px-5" style="color:#1874A2">$350.000</h5>
                                </div>
                            </div>
                        </div>

                         <!-- card -->

                        <div class="col-lg-4 col-md-6 mx-2 my-4 " style="border-radius: 15px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);max-width: 360px;">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><imgs class="imgs-fluid" src="/public/imgs/house-imgs-1.webp" alt="property image" id="zoom"></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <div class="bg-custom-color rounded text-white d-inline-block" style="background-color: #1874A2">House</div>
                                    <a class="d-block h5 mb-2 mt-2" href="" style="color:#1874A2; text-decoration:none">Ample Apartment At Last Floor</a>
                                    <p><i class="fa fa-map-marker-alt  me-2" style="color:#1874A2"></i>West flaminggo road, las vegas</p>
                                    <div>
                                        <small class="flex-fill  mx-2 py-2">Baths</small>
                                        <small class="flex-fill  mx-2 py-2">Rooms</small>
                                        <small class="flex-fill  mx-2 py-2">Beds</small>
                                        <small class="flex-fill  mx-2 py-2">Area</small>
                                    </div>
                                    <div class="pb-3">
                                        <small class="flex-fill text-center mx-2 py-2 "><i class="fa fa-bath  me-2" style="color:#1874A2"></i>2</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa-solid fa-door-open " style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa fa-bed  me-2" style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  py-2"><i class="fa fa-ruler-combined  me-2" style="color:#1874A2"></i>100 m²</small>
                                    </div>

                                </div>
                                <div class="d-flex border-top p-3">
                                    <h5 class="  px-3" style="color:#1874A2">Tom Willson</h5>
                                    <h5 class=" px-5" style="color:#1874A2">$350.000</h5>
                                </div>
                            </div>
                        </div>

                         <!-- card -->

                        <div class="col-lg-4 col-md-6 mx-2 my-4 " style="border-radius: 15px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);max-width: 360px;">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><imgs class="imgs-fluid" src="/public/imgs/house-imgs-1.webp" alt="property image" id="zoom"></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <div class="bg-custom-color rounded text-white d-inline-block" style="background-color: #1874A2">House</div>
                                    <a class="d-block h5 mb-2 mt-2" href="" style="color:#1874A2; text-decoration:none">Ample Apartment At Last Floor</a>
                                    <p><i class="fa fa-map-marker-alt  me-2" style="color:#1874A2"></i>West flaminggo road, las vegas</p>
                                    <div>
                                        <small class="flex-fill  mx-2 py-2">Baths</small>
                                        <small class="flex-fill  mx-2 py-2">Rooms</small>
                                        <small class="flex-fill  mx-2 py-2">Beds</small>
                                        <small class="flex-fill  mx-2 py-2">Area</small>
                                    </div>
                                    <div class="pb-3">
                                        <small class="flex-fill text-center mx-2 py-2 "><i class="fa fa-bath  me-2" style="color:#1874A2"></i>2</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa-solid fa-door-open " style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa fa-bed  me-2" style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  py-2"><i class="fa fa-ruler-combined  me-2" style="color:#1874A2"></i>100 m²</small>
                                    </div>

                                </div>
                                <div class="d-flex border-top p-3">
                                    <h5 class="  px-3" style="color:#1874A2">Tom Willson</h5>
                                    <h5 class=" px-5" style="color:#1874A2">$350.000</h5>
                                </div>
                            </div>
                        </div>

                         <!-- card -->

                        <div class="col-lg-4 col-md-6 mx-2 my-4 " style="border-radius: 15px;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);max-width: 360px;">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><imgs class="imgs-fluid" src="/public/imgs/house-imgs-1.webp" alt="property image" id="zoom"></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <div class="bg-custom-color rounded text-white d-inline-block" style="background-color: #1874A2">House</div>
                                    <a class="d-block h5 mb-2 mt-2" href="" style="color:#1874A2; text-decoration:none">Ample Apartment At Last Floor</a>
                                    <p><i class="fa fa-map-marker-alt  me-2" style="color:#1874A2"></i>West flaminggo road, las vegas</p>
                                    <div>
                                        <small class="flex-fill  mx-2 py-2">Baths</small>
                                        <small class="flex-fill  mx-2 py-2">Rooms</small>
                                        <small class="flex-fill  mx-2 py-2">Beds</small>
                                        <small class="flex-fill  mx-2 py-2">Area</small>
                                    </div>
                                    <div class="pb-3">
                                        <small class="flex-fill text-center mx-2 py-2 "><i class="fa fa-bath  me-2" style="color:#1874A2"></i>2</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa-solid fa-door-open " style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  mx-3 py-2"><i class="fa fa-bed  me-2" style="color:#1874A2"></i>3</small>
                                        <small class="flex-fill text-center  py-2"><i class="fa fa-ruler-combined  me-2" style="color:#1874A2"></i>100 m²</small>
                                    </div>

                                </div>
                                <div class="d-flex border-top p-3">
                                    <h5 class="  px-3" style="color:#1874A2">Tom Willson</h5>
                                    <h5 class=" px-5" style="color:#1874A2">$350.000</h5>
                                </div>
            </div>
            <!-- property-cards-end -->

    </main>






    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

=======
<?php

echo "here is the home page for this app";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>the about page : <a href="about" target="_blank">about</a></h1>
    <br>
    <h1>the about page : <a href="profile" target="_blank">profile</a></h1>
    <br>
    <h1>the about page : <a href="listings" target="_blank">listings</a></h1>
    <br>
    <h1>the about page : <a href="contact" target="_blank">contact</a></h1>
    <br>
</body>
>>>>>>> 1bff26e97c4caa6353e86915f82375b72e56c019
</html>