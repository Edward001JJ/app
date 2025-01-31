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
  <div class="start-up" id="start-up">
    <div class="logo">
      <img src="../enc-removebg-preview.jpeg" alt="">
      <h2 class="start-up-text">e.n.c <span>Grades calculator</span></h2>
      <div class="loader" id="loader">
        <p>opening grades Checker </p>
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
  <div class="content ">
    <div id="page-open" class="">
      <div class="boxe">
        <h3 class="title">e.n.c grades Checker</h3>
        <p>select module offered</p>
      </div>
      <div class="input-field">
        <select id="module-offered">
          <option selected disabled>Module offered</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
        <button type="button" class="hero-btn" onclick="checkModuleValue()">next</button>
      </div>
    </div>
    <div id="module6" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue</div>
        <p id="msg">6 modules offered</p>
      </div>
      <div class="input-box">
        <input type="number" id="num1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs1">
      </div>
      <div class="input-box">
        <input type="number" id="num2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs2">
      </div>
      <div class="input-box">
        <input type="number" id="num3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs3">
      </div>
      <div class="input-box">
        <input type="number" id="num4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs4">
      </div>
      <div class="input-box">
        <input type="number" id="num5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs5">
      </div>
      <div class="input-box">
        <input type="number" id="num6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs6">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers6()">get grade point</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module7" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue</div>
        <p id="msg7">7 module to offer</p>
      </div>
      <div class="input-box">
        <input type="number" id="num7_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs7_1">
      </div>
      <div class="input-box">
        <input type="number" id="num7_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs7_2">
      </div>
      <div class="input-box">
        <input type="number" id="num7_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs7_3">
      </div>
      <div class="input-box">
        <input type="number" id="num7_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs7_4">
      </div>
      <div class="input-box">
        <input type="number" id="num7_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs7_5">
      </div>
      <div class="input-box">
        <input type="number" id="num7_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs7_6">
      </div>
      <div class="input-box">
        <input type="number" id="num7_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs7_7">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers7()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module8" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg8">8 module to offer</p>
      </div>
      <div class="input-box">
        <input type="number" id="num8_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_1">
      </div>
      <div class="input-box">
        <input type="number" id="num8_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_2">
      </div>
      <div class="input-box">
        <input type="number" id="num8_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_3">
      </div>
      <div class="input-box">
        <input type="number" id="num8_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_4">
      </div>
      <div class="input-box">
        <input type="number" id="num8_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_5">
      </div>
      <div class="input-box">
        <input type="number" id="num8_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_6">
      </div>
      <div class="input-box">
        <input type="number" id="num8_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_7">
      </div>
      <div class="input-box">
        <input type="number" id="num8_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs8_8">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers8()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module9" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg9">9 module to offer</p>
      </div>
      <div class="input-box">
        <input type="number" id="num9_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_1">
      </div>
      <div class="input-box">
        <input type="number" id="num9_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_2">
      </div>
      <div class="input-box">
        <input type="number" id="num9_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_3">
      </div>
      <div class="input-box">
        <input type="number" id="num9_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_4">
      </div>
      <div class="input-box">
        <input type="number" id="num9_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_5">
      </div>
      <div class="input-box">
        <input type="number" id="num9_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_6">
      </div>
      <div class="input-box">
        <input type="number" id="num9_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_7">
      </div>
      <div class="input-box">
        <input type="number" id="num9_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_8">
      </div>
      <div class="input-box">
        <input type="number" id="num9_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs9_9">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers9()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module10" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg10">10 module to offer</p>
      </div>
      <div class="input-box">
        <input type="number" id="num10_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_1">
      </div>
      <div class="input-box">
        <input type="number" id="num10_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_2">
      </div>
      <div class="input-box">
        <input type="number" id="num10_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_3">
      </div>
      <div class="input-box">
        <input type="number" id="num10_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_4">
      </div>
      <div class="input-box">
        <input type="number" id="num10_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_5">
      </div>
      <div class="input-box">
        <input type="number" id="num10_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_6">
      </div>
      <div class="input-box">
        <input type="number" id="num10_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_7">
      </div>
      <div class="input-box">
        <input type="number" id="num10_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_8">
      </div>
      <div class="input-box">
        <input type="number" id="num10_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_9">
      </div>
      <div class="input-box">
        <input type="number" id="num10_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs10_10">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers10()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module11" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg11">11 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num11_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_1">
      </div>
      <div class="input-box">
        <input type="number" id="num11_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_2">
      </div>
      <div class="input-box">
        <input type="number" id="num11_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_3">
      </div>
      <div class="input-box">
        <input type="number" id="num11_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_4">
      </div>
      <div class="input-box">
        <input type="number" id="num11_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_5">
      </div>
      <div class="input-box">
        <input type="number" id="num11_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_6">
      </div>
      <div class="input-box">
        <input type="number" id="num11_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_7">
      </div>
      <div class="input-box">
        <input type="number" id="num11_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_8">
      </div>
      <div class="input-box">
        <input type="number" id="num11_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_9">
      </div>
      <div class="input-box">
        <input type="number" id="num11_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_10">
      </div>
      <div class="input-box">
        <input type="number" id="num11_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs11_11">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers11()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module12" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg12">12 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num12_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_1">
      </div>
      <div class="input-box">
        <input type="number" id="num12_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_2">
      </div>
      <div class="input-box">
        <input type="number" id="num12_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_3">
      </div>
      <div class="input-box">
        <input type="number" id="num12_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_4">
      </div>
      <div class="input-box">
        <input type="number" id="num12_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_5">
      </div>
      <div class="input-box">
        <input type="number" id="num12_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_6">
      </div>
      <div class="input-box">
        <input type="number" id="num12_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_7">
      </div>
      <div class="input-box">
        <input type="number" id="num12_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_8">
      </div>
      <div class="input-box">
        <input type="number" id="num12_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_9">
      </div>
      <div class="input-box">
        <input type="number" id="num12_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_10">
      </div>
      <div class="input-box">
        <input type="number" id="num12_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_11">
      </div>
      <div class="input-box">
        <input type="number" id="num12_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs12_12">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers12()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>

    </div>
    <div id="module13" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg13">13 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num13_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_1">
      </div>
      <div class="input-box">
        <input type="number" id="num13_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_2">
      </div>
      <div class="input-box">
        <input type="number" id="num13_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_3">
      </div>
      <div class="input-box">
        <input type="number" id="num13_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_4">
      </div>
      <div class="input-box">
        <input type="number" id="num13_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_5">
      </div>
      <div class="input-box">
        <input type="number" id="num13_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_6">
      </div>
      <div class="input-box">
        <input type="number" id="num13_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_7">
      </div>
      <div class="input-box">
        <input type="number" id="num13_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_8">
      </div>
      <div class="input-box">
        <input type="number" id="num13_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_9">
      </div>
      <div class="input-box">
        <input type="number" id="num13_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_10">
      </div>
      <div class="input-box">
        <input type="number" id="num13_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_11">
      </div>
      <div class="input-box">
        <input type="number" id="num13_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_12">
      </div>
      <div class="input-box">
        <input type="number" id="num13_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs13_13">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers13()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module14" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg14">14 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num14_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_1">
      </div>
      <div class="input-box">
        <input type="number" id="num14_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_2">
      </div>
      <div class="input-box">
        <input type="number" id="num14_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_3">
      </div>
      <div class="input-box">
        <input type="number" id="num14_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_4">
      </div>
      <div class="input-box">
        <input type="number" id="num14_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_5">
      </div>
      <div class="input-box">
        <input type="number" id="num14_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_6">
      </div>
      <div class="input-box">
        <input type="number" id="num14_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_7">
      </div>
      <div class="input-box">
        <input type="number" id="num14_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_8">
      </div>
      <div class="input-box">
        <input type="number" id="num14_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_9">
      </div>
      <div class="input-box">
        <input type="number" id="num14_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_10">
      </div>
      <div class="input-box">
        <input type="number" id="num14_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_11">
      </div>
      <div class="input-box">
        <input type="number" id="num14_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_12">
      </div>
      <div class="input-box">
        <input type="number" id="num14_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_13">
      </div>
      <div class="input-box">
        <input type="number" id="num14_14" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs14_14">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers14()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module15" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg15">15 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num15_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_1">
      </div>
      <div class="input-box">
        <input type="number" id="num15_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_2">
      </div>
      <div class="input-box">
        <input type="number" id="num15_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_3">
      </div>
      <div class="input-box">
        <input type="number" id="num15_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_4">
      </div>
      <div class="input-box">
        <input type="number" id="num15_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_5">
      </div>
      <div class="input-box">
        <input type="number" id="num15_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_6">
      </div>
      <div class="input-box">
        <input type="number" id="num15_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_7">
      </div>
      <div class="input-box">
        <input type="number" id="num15_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_8">
      </div>
      <div class="input-box">
        <input type="number" id="num15_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_9">
      </div>
      <div class="input-box">
        <input type="number" id="num15_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_10">
      </div>
      <div class="input-box">
        <input type="number" id="num15_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_11">
      </div>
      <div class="input-box">
        <input type="number" id="num15_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_12">
      </div>
      <div class="input-box">
        <input type="number" id="num15_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_13">
      </div>
      <div class="input-box">
        <input type="number" id="num15_14" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_14">
      </div>
      <div class="input-box">
        <input type="number" id="num15_15" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs15_15">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers15()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module16" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg16">16 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num16_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_1">
      </div>
      <div class="input-box">
        <input type="number" id="num16_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_2">
      </div>
      <div class="input-box">
        <input type="number" id="num16_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_3">
      </div>
      <div class="input-box">
        <input type="number" id="num16_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_4">
      </div>
      <div class="input-box">
        <input type="number" id="num16_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_5">
      </div>
      <div class="input-box">
        <input type="number" id="num16_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_6">
      </div>
      <div class="input-box">
        <input type="number" id="num16_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_7">
      </div>
      <div class="input-box">
        <input type="number" id="num16_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_8">
      </div>
      <div class="input-box">
        <input type="number" id="num16_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_9">
      </div>
      <div class="input-box">
        <input type="number" id="num16_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_10">
      </div>
      <div class="input-box">
        <input type="number" id="num16_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_11">
      </div>
      <div class="input-box">
        <input type="number" id="num16_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_12">
      </div>
      <div class="input-box">
        <input type="number" id="num16_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_13">
      </div>
      <div class="input-box">
        <input type="number" id="num16_14" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_14">
      </div>
      <div class="input-box">
        <input type="number" id="num16_15" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_15">
      </div>
      <div class="input-box">
        <input type="number" id="num16_16" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs16_16">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers16()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module17" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg17">17 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num17_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_1">
      </div>
      <div class="input-box">
        <input type="number" id="num17_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_2">
      </div>
      <div class="input-box">
        <input type="number" id="num17_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_3">
      </div>
      <div class="input-box">
        <input type="number" id="num17_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_4">
      </div>
      <div class="input-box">
        <input type="number" id="num17_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_5">
      </div>
      <div class="input-box">
        <input type="number" id="num17_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_6">
      </div>
      <div class="input-box">
        <input type="number" id="num17_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_7">
      </div>
      <div class="input-box">
        <input type="number" id="num17_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_8">
      </div>
      <div class="input-box">
        <input type="number" id="num17_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_9">
      </div>
      <div class="input-box">
        <input type="number" id="num17_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_10">
      </div>
      <div class="input-box">
        <input type="number" id="num17_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_11">
      </div>
      <div class="input-box">
        <input type="number" id="num17_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_12">
      </div>
      <div class="input-box">
        <input type="number" id="num17_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_13">
      </div>
      <div class="input-box">
        <input type="number" id="num17_14" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_14">
      </div>
      <div class="input-box">
        <input type="number" id="num17_15" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_15">
      </div>
      <div class="input-box">
        <input type="number" id="num17_16" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_16">
      </div>
      <div class="input-box">
        <input type="number" id="num17_17" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs17_17">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers17()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module18" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg18">18 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num18_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_1">
      </div>
      <div class="input-box">
        <input type="number" id="num18_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_2">
      </div>
      <div class="input-box">
        <input type="number" id="num18_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_3">
      </div>
      <div class="input-box">
        <input type="number" id="num18_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_4">
      </div>
      <div class="input-box">
        <input type="number" id="num18_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_5">
      </div>
      <div class="input-box">
        <input type="number" id="num18_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_6">
      </div>
      <div class="input-box">
        <input type="number" id="num18_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_7">
      </div>
      <div class="input-box">
        <input type="number" id="num18_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_8">
      </div>
      <div class="input-box">
        <input type="number" id="num18_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_9">
      </div>
      <div class="input-box">
        <input type="number" id="num18_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_10">
      </div>
      <div class="input-box">
        <input type="number" id="num18_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_11">
      </div>
      <div class="input-box">
        <input type="number" id="num18_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_12">
      </div>
      <div class="input-box">
        <input type="number" id="num18_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_13">
      </div>
      <div class="input-box">
        <input type="number" id="num18_14" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_14">
      </div>
      <div class="input-box">
        <input type="number" id="num18_15" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_15">
      </div>
      <div class="input-box">
        <input type="number" id="num18_16" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_16">
      </div>
      <div class="input-box">
        <input type="number" id="num18_17" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_17">
      </div>
      <div class="input-box">
        <input type="number" id="num18_18" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs18_18">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers18()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module19" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg19">19 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num19_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_1">
      </div>
      <div class="input-box">
        <input type="number" id="num19_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_2">
      </div>
      <div class="input-box">
        <input type="number" id="num19_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_3">
      </div>
      <div class="input-box">
        <input type="number" id="num19_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_4">
      </div>
      <div class="input-box">
        <input type="number" id="num19_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_5">
      </div>
      <div class="input-box">
        <input type="number" id="num19_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_6">
      </div>
      <div class="input-box">
        <input type="number" id="num19_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_7">
      </div>
      <div class="input-box">
        <input type="number" id="num19_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_8">
      </div>
      <div class="input-box">
        <input type="number" id="num19_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_9">
      </div>
      <div class="input-box">
        <input type="number" id="num19_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_10">
      </div>
      <div class="input-box">
        <input type="number" id="num19_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_11">
      </div>
      <div class="input-box">
        <input type="number" id="num19_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_12">
      </div>
      <div class="input-box">
        <input type="number" id="num19_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_13">
      </div>
      <div class="input-box">
        <input type="number" id="num19_14" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_14">
      </div>
      <div class="input-box">
        <input type="number" id="num19_15" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_15">
      </div>
      <div class="input-box">
        <input type="number" id="num19_16" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_16">
      </div>
      <div class="input-box">
        <input type="number" id="num19_17" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_17">
      </div>
      <div class="input-box">
        <input type="number" id="num19_18" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_18">
      </div>
      <div class="input-box">
        <input type="number" id="num19_19" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs19_19">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers19()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
    <div id="module20" class="moduleBox hide">
      <div class="boxe">
        <div class="title">fill the requirement to continue </div>
        <p id="msg20">20 module to offer </p>
      </div>
      <div class="input-box">
        <input type="number" id="num20_1" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_1">
      </div>
      <div class="input-box">
        <input type="number" id="num20_2" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_2">
      </div>
      <div class="input-box">
        <input type="number" id="num20_3" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_3">
      </div>
      <div class="input-box">
        <input type="number" id="num20_4" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_4">
      </div>
      <div class="input-box">
        <input type="number" id="num20_5" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_5">
      </div>
      <div class="input-box">
        <input type="number" id="num20_6" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_6">
      </div>
      <div class="input-box">
        <input type="number" id="num20_7" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_7">
      </div>
      <div class="input-box">
        <input type="number" id="num20_8" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_8">
      </div>
      <div class="input-box">
        <input type="number" id="num20_9" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_9">
      </div>
      <div class="input-box">
        <input type="number" id="num20_10" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_10">
      </div>
      <div class="input-box">
        <input type="number" id="num20_11" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_11">
      </div>
      <div class="input-box">
        <input type="number" id="num20_12" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_12">
      </div>
      <div class="input-box">
        <input type="number" id="num20_13" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_13">
      </div>
      <div class="input-box">
        <input type="number" id="num20_14" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_14">
      </div>
      <div class="input-box">
        <input type="number" id="num20_15" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_15">
      </div>
      <div class="input-box">
        <input type="number" id="num20_16" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_16">
      </div>
      <div class="input-box">
        <input type="number" id="num20_17" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_17">
      </div>
      <div class="input-box">
        <input type="number" id="num20_18" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_18">
      </div>
      <div class="input-box">
        <input type="number" id="num20_19" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_19">
      </div>
      <div class="input-box">
        <input type="number" id="num20_20" placeholder="Enter Grade scored">
        <input type="number" placeholder="Enter Credit Hour" id="hrs20_20">
      </div>
      <button type="button" class="hero-btn" onclick="addNumbers20()">get score</button>
      <button type="button" class="red-btn hero-btn" onclick="ReturnPage()">re-select module</button>
    </div>
  </div>
  <script src="../main.js"></script>
</body>
</html>