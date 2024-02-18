<?php
  // connect to mysql database
   $server   = "localhost:3380";
   $username = "root";
   $password = "";
   $dbname   = "Tourism";

   $conn = mysqli_connect($server, $username, $password ,$dbname);

   if(!$conn)
   {
       echo"Not connected..!";
   }
   else{
    //echo "connected..!";
   }
   
?>