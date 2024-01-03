
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>User Add </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="fully responsive." name="description" />
    <meta content="Mehdi" name="author" />

    <!-- App favicon -->
    <!-- <link rel="stylesheet" href="/Brief-10-ImmoConnect/app/routes/../../public/csschat/chatbox.css"> -->

    <link rel="shortcut icon" href="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/favicon.ico">


    <!-- Theme Config Js -->
    <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/config.js"></script>

    <!-- App css -->
    <link href="/Brief-10-ImmoConnect/app/routes/../../public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="/Brief-10-ImmoConnect/app/routes/../../public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

  
    <!-- Icons css -->
    <link href="/Brief-10-ImmoConnect/app/routes/../../public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

             <!-- ========== Topbar Start ========== -->

                <?php include 'includes/dash1-header.php' ?>

            <!-- ========== Topbar Start ========== -->


            <!-- ========== Left Sidebar Start ========== -->

                <?php include 'includes/dash1-menue.php' ?>

            <!-- ========== Left Sidebar End ========== -->



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Welcome!</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Welcome!</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                     
                    
                        <!-- end row -->

                        <div class="row">
                       
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Add a new user</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <form action="addUser" method="POST" id="addUserForm" enctype="multipart/form-data">
                                                <!-- User Name -->
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Usernmae</label>
                                                    <input type="text" id="name" class="form-control" name="username" placeholder="First Name">
                                                    <span id="nameError" class="error">
                                                    </span>
                                                </div>
                                               
                                               
                                                <!-- Email -->
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                                    <span id="emailError" class="error">
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">phone</label>
                                                    <input type="phone" id="phone" class="form-control" name="phone" placeholder="Phone Number">
                                                    <span id="nameError" class="error">
                                                    </span>
                                                </div>
                                                <!-- User Role -->
                                                <div class="mb-3">
                                                    <label for="user_role" class="form-label">User Role</label>
                                                    <select class="form-select" id="user_role" name="user_role">
                                                        <option value="1">Admin</option>
                                                        <option value="2">Seller</option>
                                                        <option value="3">Client</option>
                                                        <!-- Add more options if needed -->
                                                    </select>
                                                    <span class="error" id="userRoleError">
                                                    </span>
                                                </div>
                                                <!-- User Status -->
                                                <div class="mb-3">
                                                    <label for="statut" class="form-label">User Status</label>
                                                    <select class="form-select" id="statut" name="status">
                                                        <option value="0">Active</option>
                                                        <option value="1">Desactivated</option>
                                                        <!-- Add more options if needed -->
                                                    </select>
                                                    <span class="error" id="userRoleError">
                                                    </span>
                                                </div>
                                                <!-- Password -->
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                    <span id="passwordError" class="error">
                                                    </span>
                                                </div>
                                                <!-- Confirm Password -->
                                                <div class="mb-3">
                                                    <label for="confirmPassword" class="form-label">Confirm password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Enter your password">
                                                        <div class="input-group-text" data-password="false">
                                                            <span class="password-eye"></span>
                                                        </div>
                                                    </div>
                                                    <span id="confirmPasswordError" class="error">
                                                    </span>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="file" class="form-label">Upload Image</label>
                                                    <input type="file" id="file" name="user_image" class="form-control" accept="image/jpeg, image/png,image/jpg">
                                                </div>

                                                <button type="submit" id="submitButton" class="btn btn-primary" name="addUser">Submit</button>
                                            </form>
                    
                                            </div> 
                                        </div>
                                    
                                    </div> 
                                </div> 
                            </div>
                        </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
            




                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> ©   Created by<b> Mehdi</b>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
               
        
          <!-- Vendor js -->
                 <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/vendor.min.js"></script>
                <!-- App js -->
                <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/app.min.js"></script>

    </body>
</html> 