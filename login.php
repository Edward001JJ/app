<?php 
  session_start();
  include("connection.php");
  include("function.php");

  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $app_id = $_POST['app_id'];
    $user_id = $_POST['user_id'];
    $pass = $_POST['password'];

    if($user_id === '' || $pass === '' || $app_id === ''){
      echo "Please fill in all fields";
    } else {
      $verify = "SELECT * FROM `student` WHERE user_id = '$user_id' LIMIT 1";
      $verified = mysqli_query($con,$verify);
      if ($verified && mysqli_num_rows($verified) > 0){
        $user_data = mysqli_fetch_assoc($verified);
        if ($pass === $user_data['password']){
          if ($user_data['verified'] == 1){
            if ($user_data['app_id'] == $app_id){
              $_SESSION['user_id'] = $user_data['user_id'];
              echo "success";
            } else {
              echo "invalid app id";
            }
          } else {
            echo "Please verify this account before use!!!";
          }
        } else {
          echo "invalid credentials, Thanks for using e.n.c my app";
        }
      } else {
        echo "invalid credential. Thanks for using e.n.c my app";
      }
    }
  }
?>