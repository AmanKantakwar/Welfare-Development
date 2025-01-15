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
                  
                  <!-- Tasks dropdown                   -->
                  
                  <li class="list-inline-item logout px-lg-2">
                     <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="logout.php">
                        <span class="d-none d-sm-inline-block text-white">Logout </span>
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy text-white">
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
               <a class="sidebar-link" href="#">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#real-estate-1"> </use>
                  </svg>
                  <span>Home</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="aboutdb.php">
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
            <!-- <li class="sidebar-item">
               <a class="sidebar-link" href="contact.php">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                     <use xlink:href="#sales-up-1"> </use>
                  </svg>
                  <span>Contact Us</span>
               </a>
            </li> -->
         </nav>
         <div class="page-content">
            <!-- Page Header-->
            <div class="bg-dash-dark-2 py-4">
               <div class="container-fluid">
                  <h2 class="h5 mb-0">Dashboard</h2>
                  <div class="container bootstrap snippets bootdeys">
                     <div class="row">
                        <div class="col-md-6 col-sm-6 content-card">
                           <div class="card-big-shadow">
                              <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                                 <div class="content">
                                    <h6 class="category">Related to Water</h6>
                                    <!-- <h4 class="title"><a href="#">Blue Card</a></h4> -->
                                    <p class="description">Water scarcity, pollution, and mismanagement pose critical threats, fueling conflicts and endangering ecosystems and human health, demanding integrated, sustainable solutions.</p>
                                 </div>
                              </div>
                              <!-- end card -->
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 content-card">
                           <div class="card-big-shadow">
                              <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                                 <div class="content">
                                    <h6 class="category">Related to Electricity</h6>
                                    <!-- <h4 class="title"><a href="#">Green Card</a></h4> -->
                                    <p class="description">Electricity shortages, from outdated infrastructure and rising demand, disrupt daily life, demanding modernization and sustainable energy solutions for reliability.</p>
                                 </div>
                              </div>
                              <!-- end card -->
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 content-card">
                           <div class="card-big-shadow">
                              <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                                 <div class="content">
                                    <h6 class="category">Related to Roads</h6>
                                    <!-- <h4 class="title"><a href="#">Yellow Card</a></h4> -->
                                    <p class="description">Potholes, formed by weather and traffic, endanger road users and strain transportation systems, demanding prompt repairs and proactive maintenance for safer, smoother journeys.</p>
                                 </div>
                              </div>
                              <!-- end card -->
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 content-card">
                           <div class="card-big-shadow">
                              <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                                 <div class="content">
                                    <h6 class="category">Related to Garbage</h6>
                                    <!-- <h4 class="title"><a href="#">Brown Card</a></h4> -->
                                    <p class="description">Rapid population growth and inadequate waste management lead to garbage, posing environmental and health risks, urging efficient recycling and waste reduction.</p>
                                 </div>
                              </div>
                              <!-- end card -->
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
                  <p class="mb-0 text-dash-gray">2024 &copy; Welfare Development. Design by <a href="https://bootstrapious.com">Aman</a>.</p>
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
   </body>
</html>
<?php