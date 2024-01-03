<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="fully responsive." name="description" />
    <meta content="Mehdi" name="author" />

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
    <div class="wrapper1">

        
      <!-- ========== Topbar Start ========== -->
      <div class="navbar-custom">
        <div class="topbar container-fluid">
            <div class="d-flex align-items-center gap-1">

                <!-- Topbar Brand Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="index.html" class="logo-light">
                        <span class="logo-lg">
                            <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                        </span>
                        <span class="logo-sm">
                            <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                        </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="logo-dark">
                        <span class="logo-lg">
                            <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="dark logo">
                        </span>
                        <span class="logo-sm">
                            <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                        </span>
                    </a>
                </div>

                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu">
                    <i class="ri-menu-line"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <!-- Topbar Search Form -->
                <div class="app-search d-none d-lg-block">
                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search...">
                            <span class="ri-search-line search-icon text-muted"></span>
                        </div>
                    </form>
                </div>
            </div>

            <ul class="topbar-menu d-flex align-items-center gap-3">
                <li class="dropdown d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="ri-search-line fs-22"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="search" class="form-control" placeholder="Search ..."
                                aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="ri-mail-line fs-22"></i>
                        <span class="noti-icon-badge badge text-bg-purple">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                        <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold"> Messages</h6>
                                </div>
                                
                            </div>
                        </div>

                        <div style="max-height: 300px;" data-simplebar>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="notify-icon">
                                                <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <h5 class="noti-item-title fw-semibold fs-14">Cristina Pride <small
                                                    class="fw-normal text-muted float-end ms-1">1 day ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">Hi, How are you? What about our
                                                next meeting</small>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="notify-icon">
                                                <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <h5 class="noti-item-title fw-semibold fs-14">Shawn Millard <small
                                                    class="fw-normal text-muted float-end ms-1">4 day ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">Yeah everything is fine</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                       

                    </div>
                </li>


                <li class="d-none d-sm-inline-block">
                    <div class="nav-link" id="light-dark-mode">
                        <i class="ri-moon-line fs-22"></i>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                        </span>
                        <span class="d-lg-block d-none">
                            <h5 class="my-0 fw-normal">Thomson <i
                                    class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="pages-profile.html" class="dropdown-item">
                            <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="auth-lock-screen.html" class="dropdown-item">
                            <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="auth-logout-2.html" class="dropdown-item">
                            <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                 <!--- Sidemenu -->
        <ul class="side-nav">
    
            <li class="side-nav-title">Main</li>
    
           
    
          
                <li class="side-nav-item">
                <a href="/Brief-10-ImmoConnect/app/routes/../views/profile.php" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Acount</span>
                </a>
            </li>
                <li class="side-nav-item">
                <a href="users" class="side-nav-link">
                <i class="ri-mail-line"></i>
                    <span> Messages </span>
                </a>
            </li>
    
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="ri-folder-line"></i>
                    <span> Listing </span>
                </a>
            </li>
           
          
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarServices" aria-expanded="false" aria-controls="sidebarServices" class="side-nav-link">
                <i class="ri-shut-down-line"></i>
                    <span> Log Out</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarFAQ" aria-expanded="false" aria-controls="sidebarFAQ" class="side-nav-link">
                    <i class="ri-questionnaire-line"></i>
                    <span> FAQ </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarFAQ">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="#">Add FAQ</a>
                        </li>
                        <li>
                            <a href="dash-faq.php">FAQ List</a>
                        </li>
                    </ul>
                </div>
            </li>
    
            
        </ul>
        <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
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
                        <div class="col-sm-12">
                            <div class="profile-bg-picture"
                                style="background-image:url('/Brief-10-ImmoConnect/app/routes/../../public/assets/images/bg-profile.jpg')">
                                <span class="picture-bg-overlay"></span>
                                <!-- overlay -->
                            </div>
                            <!-- meta -->
                            <div class="profile-user-box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="profile-user-img"><img src="/Brief-10-ImmoConnect/app/routes/../../public/assets/images/users/avatar-1.jpg" alt=""
                                                class="avatar-lg rounded-circle"></div>
                                        <div class="">
                                            <h4 class="mt-4 fs-17 ellipsis">Michael A. Franklin</h4>
                                            <p class="font-13"> User Experience Specialist</p>
                                            <p class="text-muted mb-0"><small>California, United States</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <button type="button" class="btn btn-soft-danger">
                                                <i class="ri-settings-2-line align-text-bottom me-1 fs-16 lh-1"></i>
                                                Edit Profile
                                            </button>
                                            <a class="btn btn-soft-info" href="#"> <i class="ri-check-double-fill fs-18 me-1 lh-1"></i> Following</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="profile-content">
                                        <ul class="nav nav-underline nav-justified gap-0">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#aboutme" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true" href="#aboutme">About</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#user-activities" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true"
                                                    href="#user-activities">Activities</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#edit-profile" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true"
                                                    href="#edit-profile">Settings</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#projects" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true"
                                                    href="#projects">Projects</a></li>
                                        </ul>

                                        <div class="tab-content m-0 p-4">
                                            <div class="tab-pane active" id="aboutme" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">
                                                <div class="profile-desk">
                                                    <h5 class="text-uppercase fs-17 text-dark">Johnathan Deo</h5>
                                                    <div class="designation mb-4">PRODUCT DESIGNER (UX / UI / Visual
                                                        Interaction)</div>
                                                    <p class="text-muted fs-16">
                                                        I have 10 years of experience designing for the web, and
                                                        specialize
                                                        in the areas of user interface design, interaction design,
                                                        visual
                                                        design and prototyping. I’ve worked with notable startups
                                                        including
                                                        Pearl Street Software.
                                                    </p>

                                                    <h5 class="mt-4 fs-17 text-dark">Contact Information</h5>
                                                    <table class="table table-condensed mb-0 border-top">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Url</th>
                                                                <td>
                                                                    <a href="#" class="ng-binding">
                                                                        www.example.com
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Email</th>
                                                                <td>
                                                                    <a href="" class="ng-binding">
                                                                        jonathandeo@example.com
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">Phone</th>
                                                                <td class="ng-binding">(123)-456-7890</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Skype</th>
                                                                <td>
                                                                    <a href="#" class="ng-binding">
                                                                        jonathandeo123
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div> <!-- end profile-desk -->
                                            </div> <!-- about-me -->

                                          
                                            <!-- settings -->
                                            <div id="edit-profile" class="tab-pane">
                                                <div class="user-profile-content">
                                                    <form>
                                                        <div class="row row-cols-sm-2 row-cols-1">
                                                            <div class="mb-2">
                                                                <label class="form-label" for="FullName">Full
                                                                    Name</label>
                                                                <input type="text" value="John Doe" id="FullName"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="Email">Email</label>
                                                                <input type="email" value="first.last@example.com"
                                                                    id="Email" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="web-url">Website</label>
                                                                <input type="text" value="Enter website url"
                                                                    id="web-url" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="Username">Username</label>
                                                                <input type="text" value="john" id="Username"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="Password">Password</label>
                                                                <input type="password" placeholder="6 - 15 Characters"
                                                                    id="Password" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="RePassword">Re-Password</label>
                                                                <input type="password" placeholder="6 - 15 Characters"
                                                                    id="RePassword" class="form-control">
                                                            </div>
                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="AboutMe">About Me</label>
                                                                <textarea style="height: 125px;" id="AboutMe"
                                                                    class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit"><i
                                                                class="ri-save-line me-1 fs-16 lh-1"></i> Save</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- profile -->
                                            <div id="projects" class="tab-pane">
                                                <div class="row m-t-10">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Project Name</th>
                                                                        <th>Start Date</th>
                                                                        <th>Due Date</th>
                                                                        <th>Status</th>
                                                                        <th>Assign</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Velonic Admin</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="badge bg-info">Work
                                                                                in Progress</span></td>
                                                                        <td>rent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>property one</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span
                                                                                class="badge bg-success">Pending</span>
                                                                        </td>
                                                                        <td>rent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Velonic Admin</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="badge bg-pink">Done</span>
                                                                        </td>
                                                                        <td>rent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>property one</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="badge bg-purple">Work
                                                                                in Progress</span></td>
                                                                        <td>rent</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>Velonic Admin</td>
                                                                        <td>01/01/2015</td>
                                                                        <td>07/05/2015</td>
                                                                        <td><span class="badge bg-warning">Coming
                                                                                soon</span></td>
                                                                        <td>rent</td>
                                                                    </tr>

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
                        </div>
                    </div>
                    <!-- end page title -->

                </div>
                <!-- end row -->

            </div>
            <!-- container -->
        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <script>document.write(new Date().getFullYear())</script> © <b>Mehdi</b>
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

   
        <!-- Vendor js -->
        <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/vendor.min.js"></script>
                <!-- App js -->
                <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/app.min.js"></script>

</body>

</html>