<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio Web Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!--  css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header  starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about me</a>
      <a href="#skills">Skills</a>
      <a href="#edu-exp">edu-exp</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/arber.gashi.75873" target="_blank" class="fab fa-facebook-f"></a>
     
      <a href="https://www.instagram.com/arbergashii1" target="_blank" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/arber-gashi-8625b8256" class="fab fa-linkedin"></a>
      <a href="https://www.github.com/ArberGashi12" target="_blank" class="fab fa-github"></a>
   </div>

</header>

<!-- header  ends -->

<!-- home  starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/arber.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hi, i am Arbër Gashi</h3>
      <span data-aos="fade-up">Full Stack web developer</span>
      <p data-aos="fade-up">I am a 20 year old programmer. In my Free time i try to create rest API's, lot's of research and learn new things.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home  ends -->

<!-- about  starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>short biography</span> </h1>
   <p data-aos="fade-left">I grew up in Pristina. I finished high school 
      during the years 2017-2020. During these times, 
      I developed (raised) Instagram pages, 
      which I later sold, where the largest page 
      that was developed was with 90k+ Followers. 
      I started the faculty in 2020 (October) 
      (COMPUTER SCIENCE AND ENGINEERING Department) 
      and now I am in the third year (3). So far with my 
      knowledge as a student for faculty projects 
      I have developed a website which was developed 
      with programming language PHP (html, css, javascript),
       and MySql for (Database) which has two roles, 
       the role of registration as admin and client, 
       where electronic devices (TVs, laptops, printers, 
       phones) can be posted. I also completed a training in the REACT JS programming FRAMEWORK, and I have very good knowledge in the use of react js and DOM. Then other projects with MSSQL (Database), and MINIMAL API WITH WEB API. I have extensive knowledge in the use and management of advertisements in Facebook and Instagram.</p>
   <div class="biography">

      

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span>Arbër Gashi</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> gashiarber423@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Prishtine, Kosove </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +38345957728</h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 Y/O </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> ONLY SELF PROJECTS / RESEARCH / API'S</h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <section class="skills" id="skills">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>.NET WEB API</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>C#</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>SSMSQL</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>MYSQL</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>ReactJs</span> <span></span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Bootstrap</span> <span></span></h3> </div>
         <h2 class="hea"> <span >!COLORS AND LEVELS  ARE BASED BY % OF SKILLS IN EACH LANGUAGE / FRAMEWORK / !</span> </h2>
      </div>

     

     
  
  
</div>

   </div>
   <section class="edu-exp" id="edu-exp">

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2022 ende ne studime  )</span>
               <h3>Fakulteti - Shkenca Komjuterike dhe inxhineri DEGA - WEB PROGRAMIM</h3>
               <p>during these times in my studies, I have been excited and have learned many new things about web development, through projects, researches and orientations from the professors</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( Trajnim ne React-js ne akademine ROI )</span>
               <h3>React Js</h3>
               <img src="images/qertifikate.png" alt="" style="width:100%;">
            </div>

            <div class="box" data-aos="fade-down">
               <span>(Trajnim ne c# ne akademine Probit)</span>
               <h3>C#</h3>
              
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">(serios)Projects</h3>

            <div class="box" data-aos="fade-left">
               <span>Courier Managment System</span>
               <h3>React js, sql, asp.net c#</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
               <img class="box" data-aos="fade-left" src="images/dashboard.png" alt="" style="width:100%;">
               <img class="box" data-aos="fade-right"src="images/Services.png" alt="" style="width:100%;">
               <img class="box" data-aos="fade-up"src="images/info.png" alt="" style="width:100%;">
               <img class="box" data-aos="fade-down"src="images/info2.png" alt="" style="width:100%;">
               <img class="box" data-aos="fade-left"src="images/sigin.png" alt="" style="width:100%;">
               <img class="box" data-aos="fade-right"src="images/signup.png" alt="" style="width:100%;">
               <img class="box" data-aos="fade-left"src="images/dash.png" alt="" style="width:100%;">
            </div>

            
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about  ends -->











<!-- contact  starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn" style="backroundColor:blue;">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+38349957728</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>gashiarber423@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Prishtine, Kosove - 10000</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright  <?php echo date('Y'); ?> by <span style="color:white;">Arber Gashi</span> </div>


<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>