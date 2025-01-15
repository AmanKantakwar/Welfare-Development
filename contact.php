<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "amank"; // Replace 'your_database_name' with your actual database name

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO contact_form (name, email, contact, message) VALUES ('$name', '$email', '$contact', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welfare Development</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
     <style>
        *, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
#contact .card:hover i,#contact .card:hover h4{
	color: #87d37c;
}
     </style>
   </head>
   <body>
   <header class="container-fluid header active px-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		   <a class="navbar-brand text-success" href="#"><h4>Solving Local</h4>
		<h4>Problems</h4></a>
		   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		   <span class="navbar-toggler-icon"></span>
		   </button>
		   <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
				 <li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				 </li>
				 <li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				 </li>
				 <li class="nav-item">
					<a class="nav-link" href="contact.php">Contact Us</a>
				 </li>
             <li class="nav-item">
					<a class="nav-link" href="dashboard/index.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registration</button></a>
				 </li>
				 <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Login
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					   <a class="dropdown-item" href="dashboard/index.php">Admin</a>
					   <a class="dropdown-item" href="#">User</a>
					</div>
				 </li> -->
			  </ul>
			  <form class="form-inline my-2 my-lg-0">
			  </form>
		   </div>
		</nav>
	 </header>

      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 aboutimg">
            <img src="images/imgone.jpg" alt="">
            </div>
            <div class="col-md-12">
            <section id="contact">
       <div class="container">
           <h3 class="text-center text-uppercase">contact us</h3>
           <p class="text-center w-75 m-auto">Connect with us to turn questions into answers, problems into solutions, and feedback into action</p>
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>+91-7568248565</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office loaction</h4>
                   <address>203 welfaredevelopment office, Mumbai 66008, Maharashtra, India </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Telephone No</h4>
                    <p>0712-3461584</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>welfaredevelopment@gmail.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>
            </div>
        </div>
      <div class="row sections">
        <div class="col-md-12">
           <h2 class="mb-3">Contact Us</h2>
           <h1 class="mb-3 text-danger">We work for the public to address their local issues</h1>
           <div class="background">
            <div class="container">
              <div class="screen">
                <div class="screen-header">
                  <div class="screen-header-left">
                    <div class="screen-header-button close"></div>
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                  </div>
                  <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                  </div>
                </div>
                <div class="screen-body">
                  <div class="screen-body-item left">
                    <div class="app-title">
                      <span>CONTACT</span>
                      <span>US</span>
                    </div>
                    <div class="app-contact">CONTACT INFO : +91-7568248565</div>
                  </div>
                  <div class="screen-body-item">
                    <div class="app-form">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="app-form-group">
            <input class="app-form-control" placeholder="NAME" name="name" >
        </div>
        <div class="app-form-group">
            <input class="app-form-control" name="email" placeholder="EMAIL">
        </div>
        <div class="app-form-group">
            <input class="app-form-control" name="contact" placeholder="CONTACT NO">
        </div>
        <div class="app-form-group message">
            <input class="app-form-control" name="message" placeholder="MESSAGE">
        </div>
        <div class="app-form-group buttons">
            <button class="app-form-button" type="reset">CANCEL</button>
            <button class="app-form-button" type="submit">SEND</button>
        </div>
    </form>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
          
          </div>
     </div>
    </div>
     
    <footer>
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-5 col-lg-5 mb-4 mb-md-0">
                 <h2 class="footer-heading text-left">Welfare Development</h2>
                 <p class="text-white">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                 <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                </div>
                <div class="col-md-2 col-lg-2 mb-4 mb-md-0">
                     <h2 class="footer-heading text-left">Links</h2>
                     <p class="text-white"><a href="index.php">Home</a></p>
					 <p class="text-white"><a href="about.php">About Us</a></p>
					 <p class="text-white"><a href="contact.php">Contact Us</a> </p>
                  </div>
              <div class="col-md-5 col-lg-5 mb-4 mb-md-0">
                <h2 class="footer-heading text-left">Contact Details</h2>
                <p class="text-white">	203 welfaredevelopment office ,Mumbai-66008,Maharashtra,India</p>
                <p class="text-white">	+91-7568248565</p>
             </div>
           </div>
        </div>
     </footer>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>