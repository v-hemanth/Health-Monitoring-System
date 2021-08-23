
<?php
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_database','health tracker');
  $connection=mysqli_connect(db_server,db_username,db_password,db_database);
	  $fname=$_POST['fname'];
	  $lname=$_POST['lname'];
	  $age=$_POST['age'];
	  $sex=$_POST['sex'];
	  $hgt=$_POST['hgt'];
	  $wgt=$_POST['wgt'];
	  $sym=$_POST['sym'];
	  $dis=$_POST['dis'];
	  $dayss=$_POST['days'];
	  $bldgrp=$_POST['bldgrp'];
	  $addr=$_POST['addr'];
	  $phn=$_POST['phn'];
	  $sql1="INSERT into patient(fname,lname,age,sex,hgt,wgt,sym,dis,dayss,bldgrp,addr,phn) values ('$fname','$lname','$age','$sex','$hgt','$wgt','$sym','$dis','$dayss','$bldgrp','$addr','$phn')";
	  $sql2="UPDATE disstats SET discount = discount+1 WHERE  disname='$dis'";
	  $ff1=mysqli_query($connection,$sql1);
	  $ff2=mysqli_query($connection,$sql2);
	  
if($ff1)
{
	echo "successfully updated info into database";
    header('location: IPregistration form.html');
}
else{
    echo "somthing is wrong";
}

?>