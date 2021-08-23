
<?php
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_database','health tracker');
  $connection=mysqli_connect(db_server,db_username,db_password,db_database);
  if($connection){
      echo"Succeccfully connected to database <br>";
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		$bldgrp=$_POST['bldgrp'];
		$addr=$_POST['addr'];
		$phn=$_POST['phn'];
	$sql="INSERT into usertable(fname,lname,age,sex,uname,pass,email,bldgrp,addr,phn) values ('$fname','$lname','$age','$sex','$uname','$pass','$email','$bldgrp','$addr','$phn')";
	if(!mysqli_query($connection,$sql)){
		echo "Not Inserted";
	}
	else{
		echo "Inserted Succesfully";
		header('Location: Login.html');
	}
   
  }
else{
    echo"Failed to connect to database";
   }
  
?>