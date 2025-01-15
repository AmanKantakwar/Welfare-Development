<?php
// session_start();
// error_reporting()
// include "connection.php";

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//   $username = $_POST['loginUsername'];
//   $password = $_POST['loginPassword'];
  
//   $servername = "localhost";
//   $username = "root";
//   $password = "";
//   $dbName = "amank";

//   $conn= new mysqli($host, $username, $password, $dbName);

//   if($conn->connect_error){
//     die("Connection Failed: ".$conn->connect_error);
//   }
//   $query = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
//   $result = $conn->query($query);

//   if($result->num_rows == 1){
//   //  header("Location: home.php");
//   echo "Connection Successful";
//   }
//   else{
//     echo "Failed to Login";

//     exit();
//   }
//   $conn->close();
// }


?>