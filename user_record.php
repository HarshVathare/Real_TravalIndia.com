<?php
  include("connection.php");
  error_reporting(0);

 $query = "SELECT * FROM register";
 $data=mysqli_query($conn,$query);
 
 $total=mysqli_num_rows($data);
// $result=mysqli_fetch_assoc($data);
 
 ?>

 <style>
body{
    background-color: aqua;
    background:  linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("/images/activity/adminpares.jpg");
    background-size: cover;
}
 


.nevbar{
    font-size: 18px;
    display: flex; 
    height: 11vh;
    width: 100vw;
    background-color: transparent;
    
}



.nevbar img{
    padding: 9px;
    height: 50px;
    width: 80px;
}

.nevbar ul{
    display: flex;
    list-style: none;
    margin-left: 27px;
    
}

.nevbar ul li{
    margin-left: 37px;
    
}

.nevbar a{
    text-decoration: none;
    font-size: 20;
    font-weight: bold;
    color: white;
    
}

.nevbar a span{
    color: orangered;
}

.nevbar a:hover{
    color: orangered;
}

.btn{
    margin-top: 7.5px;
    width: 600px;
    height: 60px;
    margin-right: 10px;
    margin-right: 10px;
    text-align: end;
}

 mark{
    font-size: 21px;
    margin-right: 15px;
}

.btn button{
    height: 42px;
    width: 110px;
    background-color: orange;
    font-size: 19px;
    border-radius: 13px;
     
}

.btn button:hover{
    background-color: transparent;
    border: 2px solid white;
}






 







    .contener2 .h1{
    font-weight: bold;
    font-size: 35px;
    margin: 9px;
    margin-top: 110px;
    color: white;
    text-align: center;
}

.contener2 .h1 span{
    background-color: red;
    color: white;
}
    
 table{
    text-align: center;
    height: 300px;
    margin-left: 5%;
    margin-top: 30px; 
    color: white;
    border-color: aqua;
 }

 

 table th{
    font-size: 22px;
 }

 table td{
    font-size: 20px;
 }

</style>
<!--conter 1-->
<div class="nevbar"><img src="/images/logo.png" alt="" width="100px" height="65px">
      <ul>
         <li><a href="adminhomepage.php">Dashboard</a></li>
         <li><a href="user_record.php"> <span>User-Records</span></a></li>
         <li><a href="booking.php">Booking</a></li>
         <li><a href="contact_data.php">Contact Us</a></li>
      </ul>  
     
      <div class="btn"><mark> admin@gmail.com</mark><button><a href="login.php">Logout</a></button></div>
    </div>




<div class="contener2">
    <div class="h1">Display <span>User Data</span> </div>
     
    
 </div>

    <table border="2" cellspacing="7" width="90%">
       <tr> 
        <th width="10%">Id</th>
        <th width="10%">First Name</th>
        <th width="10%">Last Name</th>
        <th width="20%">Email Id</th>
        <th width="10%">Password</th>
        <th width="10%">Re-Password</th>
        <th width="10%">User Type</th>
       </tr>   

 <?php

 //echo $total;
if($total !=0)
{
   
    while( $result = mysqli_fetch_assoc($data))
    {
          echo "<tr> 
                  <td>".$result['Id']."</td>
                  <td>".$result['First_Name']."</td>
                  <td>".$result['Last_Name']."</td>
                  <td>".$result['Email_Id']."</td>
                  <td>".$result['Password']."</td>
                  <td>".$result['Re_Password']."</td>
                  <td>".$result['user_type']."</td>
                </tr>
                    ";
    }
}
else{
   echo "table has no records";
}

?>
</table>

<!--echo   $result['Id']." ".$result['First_Name']." ".$result['Last_Name']." ".$result['Email_Id']." ".$result['Password']." ".$result['Re_Password']." ".$result['user_type'];
      echo "<br>"; --> 