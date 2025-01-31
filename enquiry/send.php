<?php 
  session_start();
  include("../connection.php");
  include("../function.php");

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  $userdata = check_login($con);

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $userName = $userdata['student'];
    $userDept = $userdata['program'];
    $userPass = $userdata['password'];
    $user = $_POST['user'];
    $dept = $_POST['dept'];
    $pass = $_POST['pass'];
    $msg = $_POST['msg'];
    if ($user == '' || $dept == '' || $pass == ''){
      echo "no empty field allowed";
    } else {
      if ($user == $userName && $dept == $userDept && $pass == $userPass){
        if (strlen($msg) > 3000){
          echo "message is too long maximum 3000";
        } else {
          $query1 = "INSERT INTO `enquiry` (student, program, idNum, msg) VALUES('$user', '$dept', '$pass', '$msg')";
          $result1 = mysqli_query($con, $query1);
          if ($result1){
            echo "Your feedBack has been submitted successfully";
          } else {
            echo "An error occured";
          }
        }
      } else {
        echo "credentials don't match";
      }
    }
  }
?>