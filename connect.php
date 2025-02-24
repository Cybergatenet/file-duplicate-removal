<?php
  $con = mysqli_connect("localhost","root","","peace");
  if ($con) {
  	//echo "yes";
  }

  if (!$con) throw new Exception("Error Processing Request", 1);
  
?>