<?php
  session_start();
  $sname = $_POST["sname"];
  $psw = $_POST["psw"];
  if ($sname == "vishu" && $psw == "vishu@123")
   {
   	 $_SESSION['sname']=$sname;
   	 $_SESSION['psw']=$psw;
     header("location:main.php?message=login sucessfully");
   }else{
     header("location:index.html?message=not sucessfully ");
   }
?> 