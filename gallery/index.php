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
        <h2 class="start-up-text">e.n.c <span>gallery</span></h2>
        <div class="loader" id="loader">
          <p>opening gallery </p>
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
        <h3 id="main-text">e.n.c gallery</h3>
        <div class="grid gallery-images">
        <?php 
          $query1 = "SELECT * FROM `gallery` ORDER BY rand()";
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
        </div>
        <div id="lightbox" class="lightbox">
          <div class="iconLightBox">
            <span class="closeButton">&times;</span>
            <span class="downloadButton"><a href="" class="link" download><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/></svg></a></span>
            <span class="text-describ closeButton"></span>
          </div>
          <img src="" alt="Preview Image" class="lightbox-image">
        </div>
    </main>
    <footer class="foot">
        <h3 class="sponsor">Powered By <span>etech</span></h3>
        <h3 class="sponsor">Sponsored By <span>enpits</span></h3>
    </footer>
  </div>
<script>
    let senderOption = document.querySelectorAll(".grid-box-pic");
    senderOption.forEach(sender =>{
    sender.addEventListener('click', () =>{
        sender.classList.add('hover');
    });
    sender.addEventListener('blur', () =>{
        sender.classList.remove('hover');
    });
    sender.setAttribute('tabindex', '0');
  });
  const galleryImages = document.querySelectorAll('.gallery-image');
  const lightbox = document.getElementById('lightbox');
  const lightboxImage = document.querySelector('.lightbox-image');
  const closeButton = document.querySelector('.closeButton');
  const downloadLink = document.querySelector(".link");
  const title = document.querySelector('.text-describ');

  galleryImages.forEach(image => {
    image.addEventListener('click', function() {
      const imageUrl = image.src;
      const des = image.alt;
      lightboxImage.src = imageUrl;
      lightbox.style.display = 'block';
      downloadLink.href = imageUrl;
      downloadLink.download = des;
      title.innerHTML = `${des}`;
    });
  });

  closeButton.addEventListener('click', function() {
    lightbox.style.display = 'none';
  });

</script>
<!-- <script src="main.js"></script> -->
<script src="../main.js"></script>
</body>
</html>