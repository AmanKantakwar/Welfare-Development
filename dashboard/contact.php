<?php
   session_start();
   
   // Check if the user is logged in
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
     // If not logged in, redirect to the login page
     header("Location: login.php");
     exit();
   }
   
   // If logged in, display the home page content
   $username = $_SESSION['user_name'];
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Welfare Development</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <!-- Choices.js-->
      <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
      <!-- Google fonts - Muli-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
      <!-- theme stylesheet-->
      <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="css/custom.css">
      <!-- Favicon-->
      <link rel="shortcut icon" href="img/favicon.ico">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">

      <!-- Tweaks for older IEs--><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   
   <body>
      <header class="header">
         <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
            <div class="search-panel">
               <div class="search-inner d-flex align-items-center justify-content-center">
                  <div class="close-btn d-flex align-items-center position-absolute top-0 end-0 me-4 mt-2 cursor-pointer">
                     <span>Close </span>
                     <svg class="svg-icon svg-icon-md svg-icon-heavy text-gray-700 mt-1">
                        <use xlink:href="#close-1"> </use>
                     </svg>
                  </div>
                  <div class="row w-100">
                     <div class="col-lg-8 mx-auto">
                        <form class="px-4" id="searchForm" action="#">
                           <div class="input-group position-relative flex-column flex-lg-row flex-nowrap">
                              <input class="form-control shadow-0 bg-none px-0 w-100" type="search" name="search" placeholder="What are you searching for...">
                              <button class="btn btn-link text-gray-600 px-0 text-decoration-none fw-bold cursor-pointer text-center" type="submit">Search</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between py-1">
               <div class="navbar-header d-flex align-items-center">
                  <a class="navbar-brand text-uppercase text-reset" href="index.html">
                     <div class="brand-text brand-big"><strong class="text-success">Welfare</strong><strong class="text-white">Development</strong></div>
                     <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                  </a>
                  <button class="sidebar-toggle">
                     <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                        <use xlink:href="#arrow-left-1"> </use>
                     </svg>
                  </button>
               </div>
               <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                     <a class="search-open nav-link px-0" href="#">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy text-gray-700">
                           <use xlink:href="#find-1"> </use>
                        </svg>
                     </a>
                  </li>
                  <!-- Messages dropdown -->
                  <li class="list-inline-item dropdown px-lg-2">
                     <a class="nav-link text-reset px-1 px-lg-0" id="navbarDropdownMenuLink1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                           <use xlink:href="#envelope-1"> </use>
                        </svg>
                        <span class="badge bg-dash-color-1">5</span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink1">
                        <li>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="position-relative">
                                 <img class="avatar avatar-md" src="img/avatar-3.jpg" alt="Nadia Halsey">
                                 <div class="availability-status bg-success"></div>
                              </div>
                              <div class="ms-3">   <strong class="d-block">Nadia Halsey</strong><span class="d-block text-xs">lorem ipsum dolor sit amit</span><small class="d-block">9:30am</small></div>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="position-relative">
                                 <img class="avatar avatar-md" src="img/avatar-2.jpg" alt="Peter Ramsy">
                                 <div class="availability-status bg-warning"></div>
                              </div>
                              <div class="ms-3">   <strong class="d-block">Nadia Halsey</strong><span class="d-block text-xs">lorem ipsum dolor sit amit</span><small class="d-block">9:30am</small></div>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="position-relative">
                                 <img class="avatar avatar-md" src="img/avatar-1.jpg" alt="Sam Kaheil">
                                 <div class="availability-status bg-danger"></div>
                              </div>
                              <div class="ms-3">   <strong class="d-block">Nadia Halsey</strong><span class="d-block text-xs">lorem ipsum dolor sit amit</span><small class="d-block">9:30am</small></div>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="position-relative">
                                 <img class="avatar avatar-md" src="img/avatar-5.jpg" alt="Sara Wood">
                                 <div class="availability-status bg-secondary"></div>
                              </div>
                              <div class="ms-3">   <strong class="d-block">Nadia Halsey</strong><span class="d-block text-xs">lorem ipsum dolor sit amit</span><small class="d-block">9:30am</small></div>
                           </a>
                        </li>
                        <li><a class="dropdown-item text-center message" href="#"> <strong>See All Messages <i class="fas fa-angle-right ms-1"></i></strong></a></li>
                     </ul>
                  </li>
                  <!-- Tasks dropdown                   -->
                  <li class="list-inline-item dropdown px-lg-2">
                     <a class="nav-link text-reset px-1 px-lg-0" id="navbarDropdownMenuLink2" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                           <use xlink:href="#paper-stack-1"> </use>
                        </svg>
                        <span class="badge bg-dash-color-3">9</span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink2">
                        <li>
                           <a class="dropdown-item" href="#">
                              <div class="d-flex justify-content-between mb-1"><strong>Task 1</strong><span>40% complete</span></div>
                              <div class="progress" style="height: 2px">
                                 <div class="progress-bar bg-dash-color-1" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item" href="#">
                              <div class="d-flex justify-content-between mb-1"><strong>Task 2</strong><span>20% complete</span></div>
                              <div class="progress" style="height: 2px">
                                 <div class="progress-bar bg-dash-color-2" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item" href="#">
                              <div class="d-flex justify-content-between mb-1"><strong>Task 3</strong><span>70% complete</span></div>
                              <div class="progress" style="height: 2px">
                                 <div class="progress-bar bg-dash-color-3" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item" href="#">
                              <div class="d-flex justify-content-between mb-1"><strong>Task 4</strong><span>40% complete</span></div>
                              <div class="progress" style="height: 2px">
                                 <div class="progress-bar bg-dash-color-4" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item" href="#">
                              <div class="d-flex justify-content-between mb-1"><strong>Task 5</strong><span>30% complete</span></div>
                              <div class="progress" style="height: 2px">
                                 <div class="progress-bar bg-dash-color-1" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </a>
                        </li>
                        <li>           <a class="dropdown-item text-center" href="#"> <strong>See All Tasks <i class="fas fa-angle-right ms-1"></i></strong></a></li>
                     </ul>
                  </li>
                  <li class="list-inline-item logout px-lg-2">
                     <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="logout.php">
                        <span class="d-none d-sm-inline-block">Logout </span>
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                           <use xlink:href="#disable-1"> </use>
                        </svg>
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <div class="d-flex align-items-stretch">
         <!-- Sidebar Navigation-->
         <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center p-4">
               <img class="avatar shadow-0 img-fluid rounded-circle" src="uploads/user.png" alt="...">
               <div class="ms-3 title">
                  <h1 class="h5 mb-1">Hello, <?php echo $_SESSION['user_name']; ?></h1>
                  <!-- <h1 class="h5 mb-1">Mark Stephen</h1>
                     <p class="text-sm text-gray-700 mb-0 lh-1">Web Designer</p> -->
               </div>
            </div>
            <span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
            <ul class="list-unstyled">
            <li class="sidebar-item active">
               <a class="sidebar-link" href="../index.php">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#real-estate-1"> </use>
                  </svg>
                  <span>Home</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="../about.php">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#portfolio-grid-1"> </use>
                  </svg>
                  <span>About Us</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="services.php">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <span>Services</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#browser-window-1"> </use>
                  </svg>
                  <span>Grievances </span>
               </a>
               <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                  <li><a class="sidebar-link" href="submit_complaint.php">Complaint</a></li>
                  <li><a class="sidebar-link" href="checkstatus.php">Check Status</a></li>
               </ul>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="submit_opinion.php">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <span>Public Opinion</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="submit_feedback.php">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <span>Feedback</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="../about.php">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <span>Contact Us</span>
               </a>
            </li>
         </nav>
         <div class="page-content">
            <!-- Page Header-->
            <div class="bg-dash-dark-2 py-4">
               <div class="container-fluid">
                  <h2 class="h5 mb-0">Dashboard</h2>
           <h3 class="text-center text-uppercase">Contact Us</h3>
           <p class="text-center w-75 m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris interdum purus at sem ornare sodales. Morbi leo nulla, pharetra vel felis nec, ullamcorper condimentum quam.</p>
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>+8801683615582,+8801750603409</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office loaction</h4>
                   <address>Suite 02, Level 12, Sahera Tropical Center </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office loaction</h4>
                    <address>Suite 02, Level 12, Sahera Tropical Center </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>http://al.a.noman1416@gmail.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
            </div>
            <!-- Page Footer-->
            <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
               <div class="container-fluid text-center">
                  <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                  <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
               </div>
            </footer>
         </div>
      </div>
      <!-- JavaScript files-->
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/just-validate/js/just-validate.min.js"></script>
      <script src="vendor/chart.js/Chart.min.js"></script>
      <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="js/charts-home.js"></script>
      <!-- Main File-->
      <script src="js/front.js"></script>
      <script>
         // ------------------------------------------------------- //
         //   Inject SVG Sprite - 
         //   see more here 
         //   https://css-tricks.com/ajaxing-svg-sprite/
         // ------------------------------------------------------ //
         function injectSvgSprite(path) {
         
             var ajax = new XMLHttpRequest();
             ajax.open("GET", path, true);
             ajax.send();
             ajax.onload = function(e) {
             var div = document.createElement("div");
             div.className = 'd-none';
             div.innerHTML = ajax.responseText;
             document.body.insertBefore(div, document.body.childNodes[0]);
             }
         }
         // this is set to BootstrapTemple website as you cannot 
         // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
         // while using file:// protocol
         // pls don't forget to change to your domain :)
         injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
         
         
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
<?php