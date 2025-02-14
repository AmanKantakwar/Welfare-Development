
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "amank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve username, password, and mobile number from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to insert user data into the database
 $sql = "INSERT INTO users (user_name, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
          <div class="card-body p-0">
            <div class="row gx-0 align-items-stretch">
              <!-- Logo & Information Panel-->
              <div class="col-lg-6">
                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                  <div class="py-5">
                    <h1 class="display-6 fw-bold">Welfare Development</h1>
                    <p class="fw-light mb-0">Registration Form</p>
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100 bg-dash-dark-2">
                  <form class="register-form py-5 w-100" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                    <div class="input-material-group mb-3">
                      <input class="input-material" type="text" name="username" required data-validate-field="registerUsername">
                      <label class="label-material" for="register-username">Username</label>
                    </div>
                    <div class="input-material-group mb-3">
                      <input class="input-material" type="email" name="email" required data-validate-field="registerEmail">
                      <label class="label-material">Email Address</label>
                    </div>
                    <div class="input-material-group mb-4">
                      <input class="input-material" type="password" name="password" required data-validate-field="registerPassword">
                      <label class="label-material">Password</label>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" id="register-agree" name="registerAgree" type="checkbox" required value="1" data-validate-field="registerAgree">
                      <label class="form-check-label form-label" for="register-agree">I agree with the terms and policy                        </label>
                    </div>
                    <button class="btn btn-primary mb-3" id="login" type="submit">Register</button><br><small class="text-gray-500">Already have an account?  </small><a class="text-sm text-paleBlue" href="login.html">Login</a>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="register-footer text-center position-absolute bottom-0 start-0 w-100">
        <p class="text-white"><a class="external" href="https://bootstrapious.com/p/admin-template"></a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
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