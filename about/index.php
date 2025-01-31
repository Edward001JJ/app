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
  <link rel="stylesheet" href="../main.css">
  <link rel="shortcut icon" href="../enc-removebg-preview.jpeg" type="image/x-icon">
  <title>E.N.C My App</title>
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
      <h2 class="start-up-text">e.n.c <span>about</span></h2>
      <div class="loader" id="loader">
        <p>opening about </p>
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
    <h3 id="main-text">e.n.c about</h3>
    <div class="box2">
      <div class="list-col" onclick="about('enc')" id="enc">
        <div class="list-row">
          <div class="list-img"><img src="../enc-removebg-preview.jpeg" alt="E.N.C My App"></div>
          <div class="list-title">every nation college</div>
          <div class="icon">=></div>
        </div>
        <div class="list-details">
          ENC is a Christian higher learning institution based in Bo, Sierra Leone. <br> It occupies a 50-acre campus 3 kilometers south of Bo city center. The college is affiliated with the Ernest Bai Koroma University of Science and Technology and aims to train students to meet international professional standards in public services and private industries. <br> The founder, Rev. Dr. Shodankeh Johnson, established the college with a vision to equip students with values that contribute positively to their communities. The campus features a scenic environment with flatlands, mountainous terrain, and swamps, providing a tranquil setting ideal for learning. <br><br>
          <span><a href="http://enc.edu.sl" class="about-link">read more online</a></span> <br>
        </div>
      </div>
      <div class="list-col" id="app" onclick="about('app')">
        <div class="list-row">
          <div class="list-img"><img src="../enc-removebg-preview.jpeg" alt="E.N.C My App"></div>
          <div class="list-title">e.n.c my app</div>
          <div class="icon">=></div>
        </div>
        
      </div>
      <div class="list-col" id="enpits" onclick="about('enpits')">
        <div class="list-row">
          <div class="list-img"><img src="../enc-removebg-preview.jpeg" alt="E.N.C My App"></div>
          <div class="list-title">e.n.p.i.t.s</div>
          <div class="icon">=></div>
        </div>
        <div class="list-details">
          Every Nation Polytechnic I.T Studemts (ENPITS) is an institution committed to nurturing innovative and technically skilled individuals who are prepared to meet the challenges of a rapidly evolving world. Located in a dynamic and inspiring learning environment, ENPITS offers a comprehensive range of technical and vocational programs tailored to equip students with the knowledge, practical skills, and values needed to excel in their chosen fields. We help to bridge the gap between education and industry by providing hands-on training, fostering creativity, and promoting ethical practices. At ENPITS, students are empowered to become critical thinkers, problem-solvers, and leaders in their respective professions. With a dedicated team of educators, state-of-the-art facilities, and a curriculum aligned with global standards, we strive to create a community where learning and innovation thrive. 
        </div>
      </div>
      <div class="list-col" id="etech" onclick="about('etech')">
        <div class="list-row">
          <div class="list-img"><img src="../enc-removebg-preview.jpeg" alt="E.N.C My App"></div>
          <div class="list-title">etech</div>
          <div class="icon">=></div>
        </div>
        <div class="list-details">
           Etech, short for Edward Technology, is an ambitious and forward-thinking internet platform poised to revolutionize how individuals and organizations interact with technology. Designed to empower users with cutting-edge tools and services, Etech envisions a future where technology seamlessly integrates with everyday life, driving innovation, efficiency, and connectivity. Our platform is built around the core principles of accessibility, security, and user-centric design. Etech aims to serve as a one-stop hub for: <br>-Digital Solutions: Offering tools for businesses to optimize operations, enhance productivity, and reach global markets. <br>-Educational Resources: Providing learning modules and certifications in technology and digital skills. <br>-Community Engagement: Creating forums and networks for collaboration, knowledge sharing, and mentorship. <br>-Innovation Incubation: Supporting startups and entrepreneurs in bringing their ideas to life through resources, funding, and guidance. Etech is dedicated to fostering a digital ecosystem where individuals and organizations thrive. With a commitment to inclusivity and innovation, we aspire to be a trusted partner in your digital journey. Whether you're a student, professional, or entrepreneur, Etech provides the platform, tools, and community to help you achieve your goals. Join Etech and be a part of shaping the future of technology and connectivity.
        </div>
      </div>
      <div class="list-col" id="dev" onclick="about('dev')">
        <div class="list-row">
          <div class="list-img"><img src="../enc-removebg-preview.jpeg" alt="E.N.C My App"></div>
          <div class="list-title">team/developers</div>
          <div class="icon">=></div>
        </div>
        <div class="list-details">
          <h3 class="sponsor">Powered By <span>etech</span></h3>
          <h3 class="sponsor">Sponsored By <span>enpits</span></h3>
        </div>
      </div>
      <div class="list-col" id="policy" onclick="about('policy')">
        <div class="list-row">
          <div class="list-img"><img src="../enc-removebg-preview.jpeg" alt="E.N.C My App"></div>
          <div class="list-title">private policy</div>
          <div class="icon">=></div>
        </div>
        <div class="list-details">
           <b>Privacy Policy</b> <br> <br> 1. Information We Collect <br>- Personal Information: Name, college identity and other details provided during registration. <br> - Usage Data: Information about your interactions with the app, such as pages visited and actions performed. <br> 2. How We Use Your Information: <br> - To provide and improve our services. <br>- To communicate updates, respond to inquiries, and manage your account. <br> - To ensure the security and proper functioning of the app. <br> 3. Sharing Your Information: <br> - We do not sell or rent your information to third parties. <br> - Information may be shared with third-party service providers solely to assist in delivering our services. <br> - We may disclose information if required by law or to protect our rights. <br> 4. Data Security: <br> We implement reasonable security measures to protect your data. However, no method of transmission over the internet is entirely secure, and we cannot guarantee absolute security. <br> 6. Your Rights : <br>- Access and update your personal information. <br> - Request the deletion of your data, subject to legal and operational requirements. <br>- Opt out of receiving promotional communications. <br> 7. Changes to this Policy We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated revision date. <br> 8. <br> If any question feel free to contact our <a href="../enquiry/" class="about-link">clients team</a>
        </div>
      </div>
      <div class="list-col" id="tos" onclick="about('tos')">
        <div class="list-row">
          <div class="list-img"><img src="../enc-removebg-preview.jpeg" alt="E.N.C My App"></div>
          <div class="list-title">terms of services</div>
          <div class="icon">=></div>
        </div>
        <div class="list-details">
          <b>Terms of Service</b><br><br>  1. Acceptance of Terms Welcome to Every Nation College Mobile App (E.N.C My App). By accessing or using our services, you agree to be bound by these Terms of Service and our Privacy Policy. If you do not agree, please refrain from using our services.  <br>2. Use of Services - You must be at least 18 years old and a student of E.N.C. - You agree to use the app only for lawful purposes and in compliance with all applicable laws. - You are responsible for maintaining the confidentiality of your account information. <br> 3. User Content - You retain ownership of any content you submit to the app but grant ENC a non-exclusive, royalty-free license to use, reproduce, and display such content for service operation. - You must not upload content that is offensive, illegal, or violates intellectual property rights. <br> 4. Prohibited Activities You agree not to: <br> - Attempt to interfere with the app’s functionality or security. <br>- Use the app to distribute spam, malware, or unauthorized advertising. <br>- Reverse-engineer or copy any part of the app’s code or content.  <br>5. Modifications to Services ENC reserves the right to modify or discontinue the app’s services at any time without prior notice. We are not liable for any disruption caused by such changes.  <br>6. Termination We may terminate or suspend your access to the app if you breach these Terms of Service. Termination does not affect accrued rights or liabilities. <br> 7. Limitation of Liability ENC is not liable for any indirect, incidental, or consequential damages arising from the use of our services. The app is provided "as is" without warranties of any kind. <br> 8. Governing Law These terms are governed by the laws of Sierra Leone. Any disputes arising from these terms will be subject to the exclusive jurisdiction of Sierra Leone courts. <br> If any question feel free to contact our <a href="../enquiry/" class="about-link">clients team</a>
        </div>
      </div>
    </div>
    </main>
    <footer class="foot">
      <h3 class="sponsor">Powered By <span>etech</span></h3>
      <h3 class="sponsor">Sponsored By <span>enpits</span></h3>
    </footer>
  <script>
    let enc = document.getElementById("enc");
    let app = document.getElementById("app");
    let enpits = document.getElementById("enpits");
    let etech = document.getElementById("etech");
    let dev = document.getElementById("dev");
    let policy = document.getElementById("policy");
    let tos = document.getElementById("tos");
   function about(whatAbout){
      if (whatAbout === 'enc'){
        enc.classList.toggle("hidden-col");
        app.classList.remove("hidden-col");
        enpits.classList.remove("hidden-col");
        etech.classList.remove("hidden-col");
        dev.classList.remove("hidden-col");
        policy.classList.remove("hidden-col");
        tos.classList.remove("hidden-col");
      } else if (whatAbout === 'app'){
        enc.classList.remove("hidden-col");
        app.classList.toggle("hidden-col");
        enpits.classList.remove("hidden-col");
        etech.classList.remove("hidden-col");
        dev.classList.remove("hidden-col");
        policy.classList.remove("hidden-col");
        tos.classList.remove("hidden-col");
      } else if (whatAbout === 'enpits'){
        enc.classList.remove("hidden-col");
        app.classList.remove("hidden-col");
        enpits.classList.toggle("hidden-col");
        etech.classList.remove("hidden-col");
        dev.classList.remove("hidden-col");
        policy.classList.remove("hidden-col");
        tos.classList.remove("hidden-col");
      } else if (whatAbout === 'etech'){
        enc.classList.remove("hidden-col");
        app.classList.remove("hidden-col");
        enpits.classList.remove("hidden-col");
        etech.classList.toggle("hidden-col");
        dev.classList.remove("hidden-col");
        policy.classList.remove("hidden-col");
        tos.classList.remove("hidden-col");
      } else if (whatAbout === 'dev'){
        enc.classList.remove("hidden-col");
        app.classList.remove("hidden-col");
        enpits.classList.remove("hidden-col");
        etech.classList.remove("hidden-col");
        dev.classList.toggle("hidden-col");
        policy.classList.remove("hidden-col");
        tos.classList.remove("hidden-col");
      } else if (whatAbout === 'policy'){
        enc.classList.remove("hidden-col");
        app.classList.remove("hidden-col");
        enpits.classList.remove("hidden-col");
        etech.classList.remove("hidden-col");
        dev.classList.remove("hidden-col");
        policy.classList.toggle("hidden-col");
        tos.classList.remove("hidden-col");
      } else if (whatAbout === 'tos'){
        enc.classList.remove("hidden-col");
        app.classList.remove("hidden-col");
        enpits.classList.remove("hidden-col");
        etech.classList.remove("hidden-col");
        dev.classList.remove("hidden-col");
        policy.classList.remove("hidden-col");
        tos.classList.toggle("hidden-col");
      } else{
        enc.classList.remove("hidden-col");
        app.classList.remove("hidden-col");
        enpits.classList.remove("hidden-col");
        etech.classList.remove("hidden-col");
        dev.classList.remove("hidden-col");
        policy.classList.remove("hidden-col");
        tos.classList.remove("hidden-col");
      }
    }
   
  </script>
  <script src="../main.js"></script>
</body>
</html>