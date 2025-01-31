<?php 
  session_start();
  include("../connection.php");
  include("../function.php");
  $query1 = "SELECT * FROM `gallery` ORDER BY id";
  $result = mysqli_query($con,$query1);
  if($result && mysqli_num_rows($result) > 0){
    while($img = mysqli_fetch_assoc($result)){
      $title = $img['title'];
      $src = $img['image_path'];
      echo "
        <div class='grid-box-pic'>
          <img src='../2/php/assets/$src' alt='$title' class='gallery-image'>
        </div>
      ";
    }
  }
?>