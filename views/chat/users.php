<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\services\UserServices;





  session_start();
  if(!isset($_SESSION['user_id'])){
    header("location: login");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Profile </title>
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


  <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
      }
      /* body{
        display: flex;
        align-items: center;
        justify-content: center; 
        min-height: 100vh;
        background: #f7f7f7;
        padding: 0 10px;
      }  */
      /* .container{
        max-width:1170px;
        margin:auto;
        }
      img{ max-width:100%;}
      .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: left;
        overflow: hidden;
        width: 40%;
        border-right:1px solid #c4c4c4;
      }
      .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        width: 60%;
        overflow: hidden;
      } */
      .wrapper1{
        background: #fff;
        /* max-width: 450px; */
        width: 100%;
        /* margin: 50%;  */
        border-radius: 16px;
        box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                    0 32px 64px -48px rgba(0,0,0,0.5);
      }
      /* Users List CSS Start */
      .users{
        padding: 25px 30px;
      }
      .users header,
      .users-list a{
        display: flex;
        align-items: center;
        padding-bottom: 20px;
        border-bottom: 1px solid #e6e6e6;
        justify-content: space-between;
      }
      .wrapper1 img{
        object-fit: cover;
        border-radius: 50%;
      }
      .users header img{
        height: 50px;
        width: 50px;
      }
      :is(.users, .users-list) .content{
        display: flex;
        align-items: center;
      }
      :is(.users, .users-list) .content .details{
        color: #000;
        margin-left: 20px;
      }
      :is(.users, .users-list) .details span{
        font-size: 18px;
        font-weight: 500;
      }
      .users header .logout{
        display: block;
        background: #333;
        color: #fff;
        outline: none;
        border: none;
        padding: 7px 15px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 17px;
      }
      .users .search{
        margin: 20px 0;
        display: flex;
        position: relative;
        align-items: center;
        justify-content: space-between;
      }
      .users .search .text{
        font-size: 18px;
      }
      .users .search input{
        position: absolute;
        height: 42px;
        width: calc(100% - 50px);
        font-size: 16px;
        padding: 0 13px;
        border: 1px solid #e6e6e6;
        outline: none;
        border-radius: 5px 0 0 5px;
        opacity: 0;
        pointer-events: none;
        transition: all 0.2s ease;
      }
      .users .search input.show{
        opacity: 1;
        pointer-events: auto;
      }
      .users .search button{
        position: relative;
        z-index: 1;
        width: 47px;
        height: 42px;
        font-size: 17px;
        cursor: pointer;
        border: none;
        background: #fff;
        color: #333;
        outline: none;
        border-radius: 0 5px 5px 0;
        transition: all 0.2s ease;
      }
      .users .search button.active{
        background: #333;
        color: #fff;
      }
      .search button.active i::before{
        content: '\f00d';
      }
      .users-list{
        max-height: 700px;
        overflow-y: auto;
      }
      :is(.users-list, .chat-box)::-webkit-scrollbar{
        width: 0px;
      }
      .users-list a{
        padding-bottom: 10px;
        margin-bottom: 15px;
        padding-right: 15px;
        border-bottom-color: #f1f1f1;
      }
      .users-list a:last-child{
        margin-bottom: 0px;
        border-bottom: none;
      }
      .users-list a img{
        height: 40px;
        width: 40px;
      }
      .users-list a .details p{
        color: #67676a;
      }
      .users-list a .status-dot{
        font-size: 12px;
        color: #468669;
        padding-left: 10px;
      }
      .users-list a .status-dot.offline{
        color: #ccc;
      }

      /* Chat Area CSS Start */
      .chat-area header{
        display: flex;
        align-items: center;
        padding: 18px 30px;
      }
      .chat-area header .back-icon{
        color: #333;
        font-size: 18px;
      }
      .chat-area header img{
        height: 45px;
        width: 45px;
        margin: 0 15px;
      }
      .chat-area header .details span{
        font-size: 17px;
        font-weight: 500;
      }
      .chat-box{
        position: relative;
        min-height:700px;
        max-height: 500px;
        overflow-y: auto;
        padding: 10px 30px 20px 30px;
        background: #f7f7f7;
        box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
                    inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
      }
      .chat-box .text{
        position: absolute;
        top: 45%;
        left: 50%;
        width: calc(100% - 50px);
        text-align: center;
        transform: translate(-50%, -50%);
      }
      .chat-box .chat{
        margin: 15px 0;
      }
      .chat-box .chat p{
        word-wrap: break-word;
        padding: 8px 16px;
        box-shadow: 0 0 32px rgb(0 0 0 / 8%),
                    0rem 16px 16px -16px rgb(0 0 0 / 10%);
      }
      .chat-box .outgoing{
        display: flex;
      }
      .chat-box .outgoing .details{
        margin-left: auto;
        max-width: calc(100% - 130px);
      }
      .outgoing .details p{
        background: #333333;
        color: #fff;
        border-radius: 18px 18px 0 18px;
      }
      .chat-box .incoming{
        display: flex;
        align-items: flex-end;
      }
      .chat-box .incoming img{
        height: 35px;
        width: 35px;
      }
      .chat-box .incoming .details{
        margin-right: auto;
        margin-left: 10px;
        max-width: calc(100% - 130px);
      }
      .incoming .details p{
        background: #fff;
        color: #333;
        border-radius: 18px 18px 18px 0;
      }
      .typing-area{
        padding: 18px 30px;
        display: flex;
        justify-content: space-between;
      }
      .typing-area input{
        height: 45px;
        width: calc(100% - 58px);
        font-size: 16px;
        padding: 0 13px;
        border: 1px solid #e6e6e6;
        outline: none;
        border-radius: 5px 0 0 5px;
      }
      .typing-area button{
        color: #fff;
        width: 55px;
        border: none;
        outline: none;
        background: #333;
        font-size: 19px;
        cursor: pointer;
        opacity: 0.7;
        pointer-events: none;
        border-radius: 0 5px 5px 0;
        transition: all 0.3s ease;
      }
      .typing-area button.active{
        opacity: 1;
        pointer-events: auto;
      } 

      /* Responive media query */
      @media screen and (max-width: 450px) {

        .users header img{
          height: 45px;
          width: 45px;
        }
        .users header .logout{
          padding: 6px 10px;
          font-size: 16px;
        }
        :is(.users, .users-list) .content .details{
          margin-left: 15px;
        }

        .users-list a{
          padding-right: 10px;
        }

        .chat-area header{
          padding: 15px 20px;
        }
        .chat-box{
          min-height: 400px;
          padding: 10px 15px 15px 20px;
        }
        .chat-box .chat p{
          font-size: 15px;
        }
        .chat-box .outogoing .details{
          max-width: 230px;
        }
        .chat-box .incoming .details{
          max-width: 265px;
        }
        .incoming .details img{
          height: 30px;
          width: 30px;
        }
        .chat-area form{
          padding: 20px;
        }
        .chat-area form input{
          height: 40px;
          width: calc(100% - 48px);
        }
        .chat-area form button{
          width: 45px;
        }
      }
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
                            <img src="..//Brief-10-ImmoConnect/app/routes/../../public/assets/images/logo-sm.png" alt="small logo">
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
                        <a href="login" class="dropdown-item">
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
                <a href="home" class="side-nav-link">
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
                <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          $id=$_SESSION['user_id'];
          $User = new UserServices();
          $user = $User->getUserById($id);
                                                      
                
    ?>

          ?>
          <img src="#" alt="">
            <div class="details">
            <span><?php echo $user['username'] ?></span>
            <p><?php echo $user['statut']; ?></p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <?php
       foreach ($users as $user) {
        ?>
      <div class="users-list">
      
      
            <a href="message?id=<?php echo $user['id']?>">
                <div class="centent">
                    <img src="#" alt="">
                    <div class="details">
                        <span><?= $user['username'] ?></span>
                        <p>this is test message</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>
        
      </div>
      <?php }?>
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
    <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/vendor.min.js"></script>

   

    <!-- App js -->
    <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/app.min.js"></script>


    <!-- <script src="/Brief-10-ImmoConnect/app/routes/../../public/assets/js/users.js"></script> -->
 <script>
        const searchBar = document.querySelector(".search input"),
      searchIcon = document.querySelector(".search button"),
      usersList = document.querySelector(".users-list");

      searchIcon.onclick = ()=>{
        searchBar.classList.toggle("show");
        searchIcon.classList.toggle("active");
        searchBar.focus();
        if(searchBar.classList.contains("active")){
          searchBar.value = "";
          searchBar.classList.remove("active");
        }
      }


 </script>
</body>

</html>