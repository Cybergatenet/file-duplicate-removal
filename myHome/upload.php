<?php
  require('../connect.php');
  if (isset($_POST['up'])) {
  	  $filename = $_POST['filename'];
  	  $target_directory = "uploads/";
  	  $fileF = md5($_FILES['file']['name']);
  	  $target_file = $target_directory.basename(md5($_FILES["file"]["name"]));   //name is to get the file name of uploaded file
  	 // $dir = md5($target_file);
  	  $filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));	
  	if (file_exists($target_file)) {
  		echo "<script>alert('The file uploading already exist Click ok to avoid file doplicate');window.location.href='index.php';</script>";
  	}else{
		$sql = mysqli_query($con,"SELECT * FROM form_data WHERE file_name = '$fileF'");
		$getRow = mysqli_num_rows($sql);
		if($getRow > 0){
         echo "<script>alert('The file uploading already exist Click ok to avoid file doplicate');window.location.href='index.php';</script>";
		}else{
			$insert = mysqli_query($con,"INSERT INTO form_data(name,file_name)VALUES('$filename','$fileF')");
			if ($insert) {
				move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
				echo "<script>alert('File uploaded successful');window.location.href='index.php';</script>";
			}
		}
  	}
  	  //move_uploaded_file($_FILES["file"]["tmp_name"],$newfilename);   // tmp_name is the file temprory stored in the server
  	 /*if (!file_exists($filetype)) {
  	 	 echo 1;
  	   else echo 0;
  	 }else{
  	 	echo 0;
  	 }*/
  	  //Now to check if uploaded or not
    }
 ?>