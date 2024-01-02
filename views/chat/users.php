
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="fully responsive." name="description" />
    <meta content="Mehdi" name="author" />

    <!-- App favicon -->
    <link rel="stylesheet" href="..//Brief-10-ImmoConnect/app/routes/../../public/csschat/chatbox.css">

    <link rel="shortcut icon" href="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/favicon.ico">


    <!-- Theme Config Js -->
    <script src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/js/config.js"></script>

    <!-- App css -->
    <link href="..//Brief-10-ImmoConnect/app/routes/../../public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="..//Brief-10-ImmoConnect/app/routes/../../public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <style>
   
  </style>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        
      <!-- ========== Topbar Start ========== -->
      <div class="navbar-custom">
        <div class="topbar container-fluid">
            <div class="d-flex align-items-center gap-1">

                <!-- Topbar Brand Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="index.html" class="logo-light">
                        <span class="logo-lg">
                            <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                        </span>
                        <span class="logo-sm">
                            <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                        </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="logo-dark">
                        <span class="logo-lg">
                            <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="dark logo">
                        </span>
                        <span class="logo-sm">
                            <img src="../..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
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
                                                <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle"
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
                                                <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle"
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
                            <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
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
                    <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                 <!--- Sidemenu -->
        <ul class="side-nav">
    
            <li class="side-nav-title">Main</li>
    
           
    
          
                <li class="side-nav-item">
                <a href="profile.php" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Acount</span>
                </a>
            </li>
                <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers" class="side-nav-link">
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
                <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <img src="#" alt="">
          <div class="details">
            <span>titima</span>
            <p>activ now</p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <a href="chat.php">
            <div class="centent">
              <img src="$" alt="">
              <div class="details">
                <span>fatima ezahrae</span>
                <p>this is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="chat.php">
            <div class="centent">
              <img src="$" alt="">
              <div class="details">
                <span>fatima ezahrae</span>
                <p>this is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="chat.php">
            <div class="centent">
              <img src="$" alt="">
              <div class="details">
                <span>fatima ezahrae</span>
                <p>this is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

     
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
    <script src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/js/vendor.min.js"></script>

   

    <!-- App js -->
    <script src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/js/app.min.js"></script>

</body>

</html>