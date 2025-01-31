<?php 
  session_start();
  include("../connection.php");
  include("../function.php");
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  $user_data = check_login($con);
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname = $_POST['fname'];
    $program = $_POST['program'];
    $module = $_POST['module'];
    $lecturer_code = $_POST['lecturer_code'];
    $year = $_POST['year'];
    $idNum = $_POST['idNum'];
    $attendance_id = random_num(15);
    $student = $user_data['student'];
    $sProgram = $user_data['program'];
    $sYear = $user_data['year'];
    $sIdNum = $user_data['password'];
    if ($fname === '' || $program === '' || $module === '' || $lecturer_code === '' || $year === '' || $idNum === ''){
      echo "please fill in all avaliable fields";
    } else {
      if ($fname === $student && $program === $sProgram && $year === $sYear && $idNum === $sIdNum){
        $lecturer = "SELECT * FROM `lectures` WHERE lecture_id = '$lecturer_code' LIMIT 1";
        $lecter = mysqli_query($con, $lecturer);
        if ($lecter && mysqli_num_rows($lecter) > 0){
          $lec = mysqli_fetch_assoc($lecter);
          $lecModule = $lec['module'];
          $lecProgram = $lec['program'];
          $lecYear = $lec['classYear'];
          $lecDate = $lec['currDate'];
          if ($module === $lecModule && $program === $lecProgram && $year === $lecYear){
            $query = "INSERT INTO `attendance` (attendance_id, student, program, module, lecturer_code, currYear, idNum, time, currDate) VALUES('$attendance_id', '$fname', '$program', '$module', '$lecturer_code', '$year', '$idNum', NOW(), NOW())";
            $result = mysqli_query($con, $query);
            if ($result){
              $get_time = "SELECT * FROM `attendance` WHERE attendance_id = '$attendance_id' LIMIT 1";
              $got_time = mysqli_query($con,$get_time);
              if ($got_time && mysqli_num_rows($got_time) > 0){
                $new = mysqli_fetch_assoc($got_time);
                $studentDate = $new['currDate'];
                if ($lecDate === $studentDate){
                  echo "registration successfull. thanks for using E.n.c My App";
                } else{
                  $deleteQuery = "DELETE FROM `attendance` WHERE attendance_id = '$attendance_id'";
                  $delete = mysqli_query($con, $deleteQuery);
                  if ($delete){
                    echo "this lecturer class code has expired. attendance not saved";
                  }
                }
              }
              else{
              echo "an error occurred while proccessing, Please try again later";
              }
            } else {
              echo "an error occur, Please try again later";
            }
          } else{
            echo "attendance might be for another program, Please contact the Administration.";
          }
        } else {
          echo "invalid lecture code";
        }
      } else{
        echo "please stop try registering for some one else";
      }
    }
  }
?> 