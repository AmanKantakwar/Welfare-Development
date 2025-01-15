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
      <title>welfare Development</title>
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
   <style>
      .accordion{
  margin: 40px 0;
}
.accordion .item {
    border: none;
    margin-bottom: 50px;
    background: none;
}
.t-p{
  color: rgb(193 206 216);
  padding: 40px 30px 0px 30px;
}
.accordion .item .item-header h2 button.btn.btn-link {
    background: #333435;
    color: white;
    border-radius: 0px;
    font-family: 'Poppins';
    font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    text-decoration: none;
}
.accordion .item .item-header {
    border-bottom: none;
    background: transparent;
    padding: 0px;
    margin: 2px;
}

.accordion .item .item-header h2 button {
    color: white;
    font-size: 20px;
    padding: 15px;
    display: block;
    width: 100%;
    text-align: left;
}

.accordion .item .item-header h2 i {
    float: right;
    font-size: 30px;
    color: #eca300;
    background-color: black;
    width: 60px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}

button.btn.btn-link.collapsed i {
    transform: rotate(0deg);
}

button.btn.btn-link i {
    transform: rotate(180deg);
    transition: 0.5s;
}
      
   </style>
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
      <!-- <h2>Welcome, !</h2> -->
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
                    <div class="row">
                        <div class="col-md-12">
                        <div class="accordion" id="accordionExample">
  <div class="item">
     <div class="item-header" id="headingOne">
        <h2 class="mb-0">
           <button class="btn btn-link" type="button" data-toggle="collapse"
              data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Community Needs Assessment
           <i class="fa fa-angle-down"></i>
           </button>
        </h2>
     </div>
     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
        data-parent="#accordionExample">
        <div class="t-p">
        Conduct surveys, interviews, or focus groups to assess the specific needs and concerns of the community regarding the identified issue. Use this data to inform the development of targeted interventions.


        </div>
     </div>
  </div>
  <div class="item">
     <div class="item-header" id="headingThree">
        <h2 class="mb-0">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapseThree" aria-expanded="false"
              aria-controls="collapseThree">
              Resource Referral and Navigation
           <i class="fa fa-angle-down"></i>
           </button>
        </h2>
     </div>
     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
        data-parent="#accordionExample">
        <div class="t-p">
        Establish a resource hub or hotline to connect community members with relevant services, support networks, and resources related to the issue. Provide guidance and assistance in navigating available options.
        </div>
     </div>
  </div>
  <div class="item">
     <div class="item-header" id="headingFour">
        <h2 class="mb-0">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapseFour" aria-expanded="false"
              aria-controls="collapseFour">
              Direct Service Provision
           <i class="fa fa-angle-down"></i>
           </button>
        </h2>
     </div>
     <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
        data-parent="#accordionExample">
        <div class="t-p">
        Provide direct services or support to individuals or families affected by the issue. This could involve initiatives such as distributing food or hygiene kits, offering counseling services, providing access to healthcare or legal assistance, or facilitating housing assistance programs.

        </div>
     </div>
  </div>
  <div class="item">
     <div class="item-header" id="headingFive">
        <h2 class="mb-0">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapseFive" aria-expanded="false"
              aria-controls="collapseFive">
              Capacity-building Initiatives
           <i class="fa fa-angle-down"></i>
           </button>
        </h2>
     </div>
     <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
        data-parent="#accordionExample">
        <div class="t-p">
        Strengthen the capacity of local organizations, grassroots initiatives, or community groups working to address the issue. Offer training, technical assistance, or funding support to help them expand their reach, improve their effectiveness, and sustain their efforts over time.

        </div>
     </div>
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
                  <p class="mb-0 text-dash-gray">2024 &copy; Welfare development. Design by <a href="https://bootstrapious.com">Aman kantakwar</a>.</p>
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