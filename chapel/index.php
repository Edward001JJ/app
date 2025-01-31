<?php 
    session_start();
    include('../connection.php');
    include('../function.php');

    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E.N.C Grades Checker</title>
  <link rel="stylesheet" href="../main.css">
  <link rel="shortcut icon" href="../enc-removebg-preview.jpeg" type="image/x-icon">
</head>
<body>
  <div class="desktop">
    <img src="../pchatn.png" alt="">
    <p>e.n.c my app is unavailable for desktop viewers please contact <a href="mailto:sierralonedeveloper001@gmail.com">delevopers</a></p>
  </div>
  <div class="box2">
    <div class="start-up" id="start-up">
      <div class="logo">
        <img src="../enc-removebg-preview.jpeg" alt="">
        <h2 class="start-up-text">e.n.c <span>chapel attendance</span></h2>
        <div class="loader" id="loader">
          <p>opening chapel attendance </p>
          <div id="flex"><span id="countdown"></span>%</div>
        </div>
      </div>
    </div>
    <header>
        <button type="button" onclick="location.href='../index.php'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg><h6>exit</h6></button>
        <div class="logo-box">
            <img src="../enc-removebg-preview.jpeg" alt="ENC Logo">
            e.n.c my app
        </div>
        <div id="btn-box">
          <button type="button" class="key" onclick="alert('This account is Licensed and secured @<?php echo htmlspecialchars($user_data['verify_code'])?>')"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M280-400q-33 0-56.5-23.5T200-480q0-33 23.5-56.5T280-560q33 0 56.5 23.5T360-480q0 33-23.5 56.5T280-400Zm0 160q-100 0-170-70T40-480q0-100 70-170t170-70q67 0 121.5 33t86.5 87h352l120 120-180 180-80-60-80 60-85-60h-47q-32 54-86.5 87T280-240Zm0-80q56 0 98.5-34t56.5-86h125l58 41 82-61 71 55 75-75-40-40H435q-14-52-56.5-86T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Z"/></svg></button>
          <button type="button" onclick="alert('Account details: \n User: <?php echo htmlspecialchars($user_data['user_id'])?> \n App: <?php echo htmlspecialchars($user_data['app_id'])?> \n Version: 1.1.0 \n All Right Service E.N.C Mobile App')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg></button>
      </div>
    </header>
    <div class="moduleBox age-box"> 
      <div class="moduleBox contentBox">
        <div class="title text">
          <h3>e.n.c chapel attendance</h3>
          <p id="chapel-msg"></p>
        </div>
        <form id="chapel" method="post">
          <div class="box">
            <div class="input-box col">
              <input type="text" id="fname" placeholder="Your Full Name..." name="fname" autocomplete="off" required>
              <input type="text" id="program" placeholder="Your Program.." name="program" autocomplete="off" required>
              <input type="number" id="year" placeholder="Your Year" name="year" autocomplete="off" required>
              <input type="number" id="idNum" placeholder="Your I.D Number" name="idNum" autocomplete="off" required>
              <input type="hidden" id="email" value="<?php echo htmlspecialchars($user_data['email'])?>" name="email" autocomplete="off" required>
            </div>
          </div>
          <button type="button" class="hero-btn width Btn">register to chapel</button>
        </form>
      </div>
    </div>
  </div>
  <script src="../main.js"></script>
  <script>
    const form = document.getElementById("chapel");
    let msgBox = document.getElementById('chapel-msg');
    const continueBtn = document.querySelector(".hero-btn");
    form.onsubmit = (e)=>{
      e.preventDefault();// preventing form from submitting
    }
    continueBtn.onclick = ()=>{
      //msg sent
      let xhr = new XMLHttpRequest(); //creating X?L object
      xhr.open("POST", "chapel.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            msgBox.innerHTML = data;
          }
        }
      }
      //we have to send the form data through ajax to php
      let formData = new FormData(form); //creating new formData Object
      xhr.send(formData); //sending the form data to php
    }
  </script>
</body>
</html>