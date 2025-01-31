<?php
  session_start();
  include('../connection.php');
  include('../function.php');

  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
  $user_data = check_login($con);
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname = $_POST['fname'];
    $dept = $_POST['program'];
    $year = $_POST['year'];
    $idNum = $_POST['idNum'];
    $email = $_POST['email'];
    $userName = $user_data['student'];
    $userProgram = $user_data['program'];
    $chapel_id = random_num(20);
    $user = $user_data['user_id'];

    if($fname === '' || $dept === '' || $year === '' || $idNum === '' || $email == ''){
      echo "Please fill all input fields";
    } else{
      if ($fname !== $userName || $dept !== $userProgram){
        echo "please stop trying to register someone else";
      } else{
        $query = "INSERT INTO `chapel` (chapel_id, fname, program, currYear, idNum, email, time) VALUES('$chapel_id', '$fname', '$dept', '$year', '$idNum', '$email', NOW())";
        $result = mysqli_query($con,$query);
        if($result){
          $notify_id = random_num(20);
          $get_time = "SELECT * FROM `chapel` WHERE chapel_id = '$chapel_id' LIMIT 1";
          $got_time = mysqli_query($con,$get_time);
          if ($got_time && mysqli_num_rows($got_time) > 0){
            $fetch_time = mysqli_fetch_assoc($got_time);
            $time = $fetch_time['time'];
          }
          $statements =  'successfull';
          $notify = "INSERT INTO `notify` (notify_id, chapel_id, user, statements, chapel_time) VALUES('$notify_id', '$chapel_id', '$user', '$statements', '$time')";
          $notified = mysqli_query($con, $notify);
          if ($notified){
            echo "Registration Successfull. Thanks for using E.N.C My App";
          } else {
            echo "error";
          }
        } else {
          echo "Registration UnSuccessfull. Thanks for using E.N.C My App";
        }
      }
    }
  }
?>