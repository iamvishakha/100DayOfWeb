<?php
  session_start();
  if(isset($_SESSION['sname'])) 
  {
  echo "Welcome";
  } 
  else
  {
    header("location:index.html?message=main page not open");
  }
?>
 <button type="submit"><a href="logout.php">logout</a></button>
 