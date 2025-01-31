<?php 
  session_start();
  include("../connection.php");
  include("../function.php");
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $user_id = $_POST['user_id'];
    $fetch = "SELECT * FROM `rps` WHERE player_id = '$user_id' LIMIT 1";
    $fetched = mysqli_query($con,$fetch);
    if ($fetched && mysqli_num_rows($fetched) > 0){
      $newWin = "SELECT * FROM `rps` WHERE player_id = '$user_id' LIMIT 1";
      $playeyFetch = mysqli_query($con,$newWin);
      if ($playeyFetch && mysqli_num_rows($playeyFetch) > 0){
        $status = mysqli_fetch_assoc($playeyFetch);
        $winResult = $status['win'];

        $resultWin = $winResult + 1;
        $update = "UPDATE `rps` SET win = '$resultWin' WHERE player_id = '$user_id'";
        $updated = mysqli_query($con, $update);
        if ($updated){
          echo "win $resultWin";
        } else {
          echo "Fail to update score";
        }
      }
    } else {
      $newPlayer = "INSERT INTO `rps` (player_id, win, lose, tie) VALUES('$user_id', '0', '0', '0')";
      $playerExist = mysqli_query($con, $newPlayer);
      if ($playerExist){
        $newWin = "SELECT * FROM `rps` WHERE player_id = '$user_id' LIMIT 1";
        $playeyFetch = mysqli_query($con,$newWin);
        if ($playeyFetch && mysqli_num_rows($playeyFetch) > 0){
          $status = mysqli_fetch_assoc($playeyFetch);
          $winResult = $status['win'];

          $resultWin = $winResult + 1;
          $update = "UPDATE `rps` SET win = '$resultWin' WHERE player_id = '$user_id'";
          $updated = mysqli_query($con, $update);
          if ($updated){
            echo "win $resultWin";
          } else {
            echo "Fail to update score";
          }
        }
      } else {
        echo "Unable to create player now please try again";
      }
    }
  }
?>