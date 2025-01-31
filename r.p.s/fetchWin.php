<?php 
  session_start();
  include("../connection.php");
  include("../function.php");
  $user_data = check_login($con);

  $user_id = $user_data['user_id'];
  $query = "SELECT * FROM `rps` WHERE player_id = '$user_id' LIMIT 1";
  $result = mysqli_query($con,$query);
  if ($result && mysqli_num_rows($result) > 0){
    $score = mysqli_fetch_assoc($result);
    $win = $score['win'];
    $lose = $score['lose'];
    $tie = $score['tie'];
    echo "
      $win
    ";
  } else {
    echo "
      none
    ";
  }
?>