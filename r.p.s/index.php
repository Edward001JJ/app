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
  <title>E.N.C My App</title>
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
        <h2 class="start-up-text">e.n.c <span>r.p.s</span></h2>
        <div class="loader" id="loader">
          <p>opening r.p.s </p>
          <div id="flex"><span id="countdown"></span>%</div>
        </div>
      </div>
    </div>
    <header class="head">
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
    <main class="body">
        <h3 id="main-text">e.n.c r.p.s break</h3>
        <div class="box2">
          <div class="btn-col">
            <form method="post" id="rps">
          <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_data['user_id'])?>">
            <button type="button" class="r-p-s-btn rock">✊</button>
            <button type="button" class="r-p-s-btn paper">🖐</button>
            <button type="button" class="r-p-s-btn sicssors">✂️</button>
          </form>
          </div>
          <br><br>
          <div class="title text">your score</div> <br>
          <div class="r-p-s-result">
            <div class="result score-win">win: 0</div>
            <div class="result score-lose">lose: 0</div>
            <div class="result score-tie">tie: 0</div>
          </div> <br>
          <div class="title boxe alert"></div>
        </div>
    </main>
    <footer class="foot">
        <h3 class="sponsor">Powered By <span>etech</span></h3>
        <h3 class="sponsor">Sponsored By <span>enpits</span></h3>
    </footer>
  </div>
<script>
  let rockBtn = document.querySelector(".rock");
  let paperBtn = document.querySelector(".paper");
  let sicssorsBtn = document.querySelector(".sicssors");
  let form = document.getElementById("rps");
  let resultWinBtn = document.querySelector(".win");
  let resultLoseBtn = document.querySelector(".lose");
  let resultTieBtn = document.querySelector(".tie");
  let scoreWin = document.querySelector(".score-win");
  let scoreLose = document.querySelector(".score-lose");
  let scoreTie = document.querySelector(".score-tie");
  let alertResult = document.querySelector(".alert");

  rockBtn.onclick = () =>{
    playGame('rock');
  }
  paperBtn.onclick = () =>{
    playGame('paper');
  }
  sicssorsBtn.onclick = () =>{
   playGame('scissors');
  }

  function playGame(playerMove){
    const computerMove = encMove();

    let result = '';

    if (playerMove === 'scissors') {
      if (computerMove === 'rock') {
        lose();
        alertResult.innerHTML=('you lose');
      } else if (computerMove === 'paper') {
        win();
        alertResult.innerHTML=('you win');
      } else if (computerMove === 'scissors'){
        tie();
        alertResult.innerHTML=('you draw');
      }

    } else if (playerMove === 'paper') {
      if (computerMove === 'rock') {
        win();
        alertResult.innerHTML=('you win');
        result = `you pick paper computer pick rock`;
      } else if (computerMove === 'paper') {
       tie();
       alertResult.innerHTML=('you draw');
      } else if (computerMove === 'sicssors') {
        lose();
        alertResult.innerHTML=('you lose');
      }
      
    } else if (playerMove === 'rock') {
      if (computerMove === 'rock') {
        tie();
        alertResult.innerHTML=('you draw');
      } else if (computerMove === 'paper') {
        lose();
        alertResult.innerHTML=('you lose');
      } else if (computerMove === 'scissors') {
        win();
        alertResult.innerHTML=('you win');
      }
    }
  }
  function win(){
    // form.preventDefault();
    let xhr = new XMLHttpRequest(); //creating X?L object
      xhr.open("POST", "win.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;

            resultWin();
          }
        }
      }
      //we have to send the form data through ajax to php
      let formData = new FormData(form); //creating new formData Object
      xhr.send(formData); //sending the form data to php
  }
  function lose(){
    // form.preventDefault();
    let xhr = new XMLHttpRequest(); //creating X?L object
      xhr.open("POST", "lose.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;

            resultLose();
          }
        }
      }
      //we have to send the form data through ajax to php
      let formData = new FormData(form); //creating new formData Object
      xhr.send(formData); //sending the form data to php
  }
  function tie(){
    // form.preventDefault();
    let xhr = new XMLHttpRequest(); //creating X?L object
      xhr.open("POST", "tie.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;

            resultTie();
          }
        }
      }
      //we have to send the form data through ajax to php
      let formData = new FormData(form); //creating new formData Object
      xhr.send(formData); //sending the form data to php
  }
  function resultWin(){
    // form.preventDefault();
    let xhr = new XMLHttpRequest(); //creating X?L object
      xhr.open("POST", "resultWin.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;

            resultWinBtn.innerHTML = (`win: ${data}`);
          }
        }
      }
      //we have to send the form data through ajax to php
      let formData = new FormData(form); //creating new formData Object
      xhr.send(formData); //sending the form data to php
  }
  function resultTie(){
    // form.preventDefault();
    let xhr = new XMLHttpRequest(); //creating X?L object
      xhr.open("POST", "resultTie.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            resultTieBtn.innerHTML = (`tie: ${data}`);
          }
        }
      }
      //we have to send the form data through ajax to php
      let formData = new FormData(form); //creating new formData Object
      xhr.send(formData); //sending the form data to php
  }
  function resultLose(){
    // form.preventDefault();
    let xhr = new XMLHttpRequest(); //creating X?L object
      xhr.open("POST", "resultLose.php", true);
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            resultLoseBtn.innerHTML = (`lose: ${data}`);
          }
        }
      }
      //we have to send the form data through ajax to php
      let formData = new FormData(form); //creating new formData Object
      xhr.send(formData); //sending the form data to php
  }
  function encMove (){
    const randomNumber = Math.random();
    let encMove = '';
    if (randomNumber >= 0 && randomNumber < 1 / 3){
      encMove = 'rock';
    } else if  (randomNumber >= 1 / 3 && randomNumber < 2 / 3){
      encMove = 'paper';
    } else if (randomNumber >= 2 / 3 && randomNumber < 1){
      encMove = 'scissors';
    }

    return encMove;
  }
  setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "fetchWin.php", true);
    xhr.onload = ()=>{
      if (xhr.readyState === XMLHttpRequest.DONE){
        if (xhr.status === 200){
          let data = xhr.response;
         scoreWin.innerHTML = (`win: ${data}`);
        }
      }
    }
    xhr.send();
  }, 1500);
  setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "fetchLose.php", true);
    xhr.onload = ()=>{
      if (xhr.readyState === XMLHttpRequest.DONE){
        if (xhr.status === 200){
          let data = xhr.response;
         scoreLose.innerHTML = (`Lose: ${data}`);
        }
      }
    }
    xhr.send();
  }, 1500);
  setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "fetchTie.php", true);
    xhr.onload = ()=>{
      if (xhr.readyState === XMLHttpRequest.DONE){
        if (xhr.status === 200){
          let data = xhr.response;
         scoreTie.innerHTML = (`tie: ${data}`);
        }
      }
    }
    xhr.send();
  }, 1500);
</script>
<script src="../main.js"></script>
</body>
</html>