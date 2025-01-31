<?php 
    session_start();
    include('connection.php');
    include('function.php');

    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E.N.C My App</title>
  <link rel="stylesheet" href="main.css">
  <link rel="shortcut icon" href="enc-removebg-preview.jpeg" type="image/x-icon">
</head>
<body>
  <div class="desktop">
    <img src="./pchatn.png" alt="">
    <p>e.n.c my app is unavailable for desktop viewers please contact <a href="mailto:sierralonedeveloper001@gmail.com">delevopers</a></p>
  </div>
  <div class="box2">
    <header>
        <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg><h6>exit</h6></button>
        <div class="logo-box">
            <img src="./enc-removebg-preview.jpeg" alt="ENC Logo">
            e.n.c my app
        </div>
        <div id="btn-box">
            <button type="button" class="key" onclick="alert('This account is Licensed and secured @<?php echo htmlspecialchars($user_data['verify_code'])?>')"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960"><path d="M280-400q-33 0-56.5-23.5T200-480q0-33 23.5-56.5T280-560q33 0 56.5 23.5T360-480q0 33-23.5 56.5T280-400Zm0 160q-100 0-170-70T40-480q0-100 70-170t170-70q67 0 121.5 33t86.5 87h352l120 120-180 180-80-60-80 60-85-60h-47q-32 54-86.5 87T280-240Zm0-80q56 0 98.5-34t56.5-86h125l58 41 82-61 71 55 75-75-40-40H435q-14-52-56.5-86T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Z"/></svg></button>
            <button type="button" onclick="alert('Account details: \n User: <?php echo htmlspecialchars($user_data['user_id'])?> \n App: <?php echo htmlspecialchars($user_data['app_id'])?> \n Version: 1.1.0 \n All Right Service E.N.C Mobile App')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg></button>
        </div>
    </header>
    <main>
        <h3 id="main-text">active now - <?php echo htmlspecialchars($user_data['student'])?></h3>
        <div class="grid">
            <div class="grid-col" onclick="location.href='chapel/'">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
                </div>
                <h3>chapel registration</h3>
                <p>Register for E.N.C Chapel in minutes</p>
            </div>
            <div class="grid-col" onclick="location.href='age/'">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 -960 960 960" ><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                </div>
                <h3>age calculator</h3>
                <p>E.N.C Age Ai</p>
            </div>
            <div class="grid-col" onclick="location.href='grade/'">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                </div>
                <h3>result checker</h3>
                <p>Know your grades</p>
            </div>
            <div class="grid-col" onclick="location.href='attendance/'">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"><path d="M280-280h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm-80 480q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
                </div>
                <h3> attendance</h3>
                <p>Class attendance list per module</p>
            </div>
            <div class="grid-col" onclick="location.href='r.p.s'">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"><path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                </div>
                <h3>r.p.s</h3>
                <p>Enjoy your time playing r.p.s</p>
            </div>
            <div class="grid-col" onclick="location.href='gallery'">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm40-80h480L570-480 450-320l-90-120-120 160Zm-40 80v-560 560Z"/></svg>
                </div>
                <h3>gallery</h3>
                <p>view photos, past event and Histories</p>
            </div>
            <div class="grid-col" onclick="alert('Live streaming is not compaitable with this version.. Please contact developers')">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg"viewBox="0 -960 960 960"><path d="m380-340 280-180-280-180v360Zm-60 220v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320ZM160-280h640v-480H160v480Zm0 0v-480 480Z"/></svg>
                </div>
                <h3>live</h3>
                <p>Watch E.N.C live event streaming</p>
            </div>
            <div class="grid-col" onclick="location.href='about/'">
                <div class="img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
                </div>
                <h3>about</h3>
                <p>About E.N.C My App</p>
            </div>
        </div>
    </main>
    <footer>
        <h3 class="sponsor">Powered By <span>etech</span></h3>
        <h3 class="sponsor">Sponsored By <span>enpits</span></h3>
    </footer>
  </div>
<script>
    let senderOption = document.querySelectorAll(".grid-col");
    senderOption.forEach(sender =>{
    sender.addEventListener('click', () =>{
        sender.classList.add('hover');
    });
    sender.addEventListener('blur', () =>{
        sender.classList.remove('hover');
    });
    sender.setAttribute('tabindex', '0');
});
</script>
</body>
</html>