<html>
    <head>
        <title>this is homepage</title>
        <link rel="stylesheet" href="contact_us.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
</head>
    </head>
    <body>
    <div class="slider">
       <div class="nevbar">
        <div class="logo"><img src="/images/logo.png" alt="" width="87px" height="50px"></div>
        <div class="a">
        <a href="homepage.php">Home</a>
       <a href="services.php">Services</a>
       <a href="#">About Us</a>
       <a  href="contact_us.php">Contact Us</a>
       <a  href="#">Booking</a>
       </div>
       <div class="admin"><h4><mark>Hello User</mark></h4></div> 
       <div class="btn">
        <button><a href="login.php">Logout</a></button>
       </div>
    </div>

   <div class="h3"><marquee direction="left"> <mark>Welcome to my Traval-India Home page..! </mark></marquee></div><br>
<div class="header"><h1>Contact Us</h1></div>
 
<section  class="contact">
           <div  class="container">
             <h2>Contact Us</h2>  
            <div contact-wrapper>
               <div class="contact-form">
                  <h3>Send us a message</h3>
                   <form method="post">
                    <div class="form-group">
                       <input type="text" name="Name"  placeholder="Your Name..!" id="name" required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="Email"  placeholder="Your Email..!" id="email" required>
                   </div>
                   <div class="form-group">
                    <textarea name="Massages" placeholder="Your message..!" id="msg" required></textarea>
                 </div>
                 <button class="button"  id="send"  name="send" value="send">Send message</button>
                  
                 
                <?php
                   include("connection.php");
                   if(isset($_POST['send'])){
                      $name = $_POST['Name'];
                      $email = $_POST['Email'];
                      $message = $_POST['Massages'];

                      $query="INSERT INTO Contact_me (Name, Email_id, Massages) values ('$name','$email','$message')";
                      $query_run = mysqli_query($conn,$query);
                      if($query_run){
                        echo"<script>alert('Your Massage Successfully Sent...!')</script>";
                      }

                   } 
                ?>                

               </div>
               <div class="contact-info">
                 <h3>Contact Information ..!</h3>
                 <p> <i class="fas fa-phone"></i>+1 123 456 789</p><br>
                 <p><i class="fas fa-envelope"></i>tourism@gmail.com</p><br>
                 <p><i class="fas fa-map-marker-alt"></i>123 Streat, City ,Country</p>
               </div>
            </div>
           </div>
         </section>



<div class="footer">
            <div class="footer_wrapper">
               <div class="imp_link">
                 <h2 class="hr1">Links<hr></h2>
                   <ul type="disc">
                    <li>Home</li>
                    <li>Services</li>
                    <li>Destination</li>
                    <li>Login</li>
                    <li>Registor</li>
                   </ul>
               </div>

               <div class="imp_link">
                 <h2>Services<hr></h2>
                  <ul type="disc">
                   <li>Restorent</li>
                   <li>Low Price</li>
                   <li>Secure Zone</li>
                   <li>Pick up</li>
                  </ul>
               </div>

              <div class="imp_link">
                 <h2>Properties<hr></h2>
                  <ul type="disc">
                   <li>Home</li>
                   <li>About us</li>
                   <li>Contact us</li>
                   <li>Team</li>
                   <li>Our History</li>
                  </ul>
              </div>

              <div class="imp_link">
                <h2 class="hr4">Newslatter<hr></h2>
                   <input type="text" name="name" placeholder="Your Name..!"><br>
                   <input type="email" name="email" placeholder="Your Company Email..!"><br>
                   <button class="footer_btn" value="submit">Submit</button>
              </div>
               
            </div>
            
                 <div class="footer_heading">
                 <h3>SOCIAL INFO :</h3>
                
                  <div class="footer_cantent">
                     <h5>&nbsp;&nbsp;&nbsp;You can be connected to us my clicking on<br>&nbsp;&nbsp;following social media links..!</h5>
                  </div>
                  
                

                 <div class="social_media">
                  <i class="fa-brands fa-square-twitter"></i>
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-youtube"></i>
                  <i class="fa-brands fa-instagram"></i><br>

                
                    
                 </div>
                </div>  
                <div id="h4">
                    <p><br>@2024 Devloped by the Travel-India.com</p>
               </div>
               
         </div>
</body>
 </html>




