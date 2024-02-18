<!DOCTYPE html>
<?php
  include("connection.php");
   
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
    body{
      background-image: url("/images/gallery/6.jpg");
      background-repeat: no-repeat;  
      background-size: cover;
      background-color: linear-gradient(rgba(0,0,0,0.9));
      animation: change 23s infinite;
    } 

    @keyframes change{
      25%{
            background-image: url("/images/gallery/2.jpg");
            background-repeat: no-repeat;  
            background-size: cover;
            background-color: linear-gradient(rgba(0,0,0,0.9));
      }

      50%{
        background-image: url("/images/icon/registor.jpg ");
            background-repeat: no-repeat;  
            background-size: cover;
            background-color: linear-gradient(rgba(0,0,0,0.9));
      }

      75%{
        background-image: url("/images/gallery/beach1.webp");
            background-repeat: no-repeat;  
            background-size: cover;
            background-color: linear-gradient(rgba(0,0,0,0.9));
      }
      100%{
        background-image: url("/images/gallery/beach3.png");
            background-repeat: no-repeat;  
            background-size: cover;
            background-color: linear-gradient(rgba(0,0,0,0.9));
      }
    }

    .btn{
      width: 140px;
      height: 42px;
      margin-left: 15px;
      margin-top: 15px;
      background-color: transparent;
      color: white;
      font-weight: bold;
      border: 2px solid white;
      border-radius: 12px;
      
    }

    .btn a{
      text-decoration: none;
      color: white;
    }

    .btn :hover{
      color: orange;
    }

    

    .form{
      display: flex;
      justify-content: center;
      background-color: transparent;
    }

    .contener{
      width:380px;
      height:526px;
      background-color: #3edcf7;
      text-align: center;
      margin-top: 24px;
      margin-left: 120px;
      font-weight: bold;
      border-radius: 33px;
      align-items: center;
      justify-content: center;
      border: 2px solid white;
      background-color: transparent;
      margin-bottom: 30px;
    }
    .signup{
      padding-top: 17px;
      font-size:37px;
      color: white;
    }
    .first{
      font-size: 18px;
      margin-top: 23px;
      height:29px;
      border-radius:20px;
      padding-left: 30px;
    }
  
    .submit{
      font-size: 19px;
      height:50px;
      width: 130px;
      margin-top: 30px;
      padding: 12px;
      border-radius:17px;
      background-color: transparent;
      color: white;
      border: 2px solid white;
    }
    .submit:hover{
      background-color: white;
      color: black;
    }
    u{
      color: blue;
      margin-top: 45px;
    }

    h3{
      color: white;
    }

    .a{
      text-decoration: none;
      color: rgb(172, 255, 17);
    }

    .a:hover{
      color: orange;
    }
    
    .icon{
      font-size: 27px;
    }

    .icon select{
      width: 100px;
      height: 25px;
      text-align: center;
      font-size: 17px;
    }
  
    @media screen and(max-width:800px)
    {

      .btn{
      width: 125px;
      height: 37px;
      border-radius: 10px;
      
      }

      .contener{
       width:340px;
       height:490px;
       border-radius: 29px;
      }

    }

    @media screen and(max-width:600px)
    {
      .btn{
      width: 100px;
      height: 37px;
      border-radius: 10px;
      }
       
      .contener{
       width:340px;
       height:490px;
       border-radius: 29px;
       margin-left: 50px;
      }
  }

  @media screen and(max-width:450px)
    {
      .btn{
      width: 76px;
      height: 37px;
      border-radius: 8px;
      }
       
      .contener{
       width:327px;
       height:450px;
       border-radius: 29px;
       margin-left: 30px;
      }
  }

  @media screen and(max-width:350px){
    .contener{
       width:299px;
       height:270px;
       border-radius: 23px;
       margin-left: 4px;
      }
    
      .signup{
      padding-top: 12px;
      font-size:18px;
    }
    
    .first{
      font-size: 18px;
      margin-top: 23px;
      height:29px;
      border-radius:20px;
      padding-left: 30px;
      width: 110px;
    }
  
    .submit{
      font-size: 17px;
      height:48px;
      width: 90px;
      border-radius:10px;
    }

    .icon{
      font-size: 23px;
    }

    .form{
      float: left;
      margin-left: 9px;
    }

    button .btn{
      width: 20px;
      height: 10px;
    }
  }

  @media screen and (max-width:390px)
  {
    .icon{
       font-size: 17px;
    }

    .first{
      width: 120px;
      height: 19px;
      font-size: 15px;
    }

    .signup{
      font-size: 28px;
    }

    .btn{
      width: 90px;
      height: 34px;
      margin-top: 7px;
      margin-left: 7px;
    }

    .contener{
      margin-top: 13px;
      margin-left: 17px;
      width: 260px;
      height: 435px;
    }    
    
    .submit{
      font-size: 15px;
      font-weight: bold;
      width: 110px;
      height: 43px;
     
    }
    h3{
      font-size: 17px;
    }

     

  }

  </style>
</head>

<body>
  <button class="btn"><i class="fa-sharp fa-solid fa-arrow-left"></i>&nbsp; <a href="index.php">Back to home</a></button>
  <form class="form" action="" method="POST">
  <div class="contener">
    <div class="signup">
       Sign up
        <div class="icon">
          <i class="fa-regular fa-user"></i> <input type="text"  placeholder=" first name...!"class="first" name="fname" required>
        </div>
        <div class="icon">
          <i class="fa-regular fa-user"></i> <input type="text"placeholder=" last name...!" class="first" name="lname" required>
        </div>
  
        <div class="icon">
          <i class="fa-regular fa-envelope"></i> <input type="email"placeholder=" email id...!"class="first" name="email" required>
        </div>
        
        <div class="icon">
          <i class="fa-solid fa-lock"></i> <input type="password"placeholder=" password...!"class="first" name="password" required>
        </div>
        <div class="icon">
          <i class="fa-solid fa-lock"></i> <input type="password"placeholder="Re-enter password...!" class="first" name="re_password" required>
        </div>

        <div class="icon">
          <select name="select" id="">
               <option selected  value="User">User</option>
               <option  value="Admin">Admin</option>
             </select>
        </div>




        <div>
          <input type="submit"value="Register"class="submit" name="register" />
        </div>
    </div>
      <h3>Already have a registered user !! <u><a href="login.php" class="a">Login</a></u> !!</h3>
  </div>
</form>
</body>

<?php
    
    if(isset($_POST['register']))
  {
   
  $fname       = $_POST['fname'];
  $lname       = $_POST['lname'];
  $email       = $_POST['email'];
  $password    = $_POST['password'];//password and re-password  are matched then login
  $re_password = $_POST['re_password'];
  $usertype    = $_POST['select']; 
 
 
 
  $query = "INSERT INTO register (First_Name, Last_Name,  Email_Id, Password, Re_Password, user_type) values ('$fname','$lname','$email','$password','$re_password','$usertype')";
   
  $query_run = mysqli_query($conn,$query);
  //$result = mysqli_error($conn,$query);
  
  if($query_run)
 
  {
     echo"<script>alert('Register Successfully...!')</script>";

  }
  else
  {
    echo"<font color='Red'>query failed...!";
  }

}

?>

</html>