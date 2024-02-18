
<?php
include("connection.php");
//hide the warning part easily
error_reporting(0);

if(isset($_POST['submit']))
  {
     $email = $_POST['email'];
     $password = $_POST['password'];
     $query = "SELECT * FROM register WHERE Email_Id ='$email' && Password = '$password' ";
 
     $result = mysqli_query($conn,$query);
     $row = mysqli_fetch_array($result);

     if($row["user_type"]=="User")
     {
        header('location:homepage.php');
     }

     else if($row["user_type"]=="Admin")
     {
        header('location:adminhomepage.php');
     }

     else 
     {
      echo"<font color='red'><script>alert('Login failed..!')</script></font>"; 
     }


    /* $query_run = mysqli_query($conn,$query);
     $total = mysqli_num_rows($query_run);
     //echo($total);
     if($total==1)
     { 
       
       header('location:homepage.php');
     } 
     else
     {
       echo"<font color='red'><script>alert('Login failed..!')</script></font>";
     }*/
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
    body{
      background-image: url("/images/icon/registor.jpg");

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
        background-image: url("/images/gallery/6.jpg");
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
      height:450px;
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


    .login{
      padding-top: 17px;
      font-size:37px;
      color: white;
      margin-top: 45px;
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
    
    

    h3{
      color: white;
      margin-top: 21px;
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
    
    .forget_pass{
      text-align: left;
      margin-left: 52px;
      margin-top: 18px;
    }

    .forget_pass a{
      font-size: 18px;
      margin-top: 20px;
      color: white;
      text-decoration: none;
      padding-bottom: 10px;
    }

    .forget_pass a:hover{
       color: orange;
    }
  

    @media screen and (max-width:600px) 
    {
      .contener{
      width:340px;
      height:435px;
      text-align: center;
      margin-top: 24px;
      margin-left: 100px;
      font-weight: bold;
      border-radius: 22px;
      align-items: center;
      justify-content: center;
      border: 2px solid white;
      background-color: transparent;
      margin-bottom: 16px;
      margin-left: 38px;
    }  

    }

    @media screen and (max-width:400px)
    {
      .contener{
        margin-left:14px ;
        width:260px ;
        height: 370px;
      }

      .login{
      padding-top: 12px;
      font-size:23px;
      margin-top: 28px;
    }

    .icon{
      font-size:19px;
    }

    .first{
      font-size: 15px;
      margin-top: 23px;
      height:19px;
      border-radius:20px;
      padding-left: 30px;
      width: 110px;
    }
    
    .submit{
      font-size: 17px;
      height:43px;
      width: 90px;
       
      border-radius:10px;
       
    }
 
    h3{
      font-size: 17px;
    }

    .forget_pass a{
      color: orange;
    }

    .forget_pass:hover{
      color: green;
    }
    }

  </style>
</head>

<body>
    
  <button class="btn"><i class="fa-sharp fa-solid fa-arrow-left"></i>&nbsp; <a href="index.php">Back to home</a></button>
  <form class="form" action=" " method="POST">
  <div class="contener">
    <div class="login">
       Login
       
        <div class="icon">
          <i class="fa-regular fa-envelope"></i> <input type="email"placeholder=" Email_Id...!"class="first" name="email">
        </div>
        <div class="icon">
          <i class="fa-solid fa-lock"></i> <input type="password"placeholder=" password...!"class="first" name="password">
        </div>

        <div class="forget_pass"><a href="forget_pass.html" >forgot password ?</a></div>
        
        <div>
          <input type="submit"value="submit"class="submit" name="submit"/>
        </div>
         
    </div>
      <h3> !! <a href="register.php" class="a">sign up</a> !! for new users !!</h3>
  </div>
</form>
</body>
</html>
