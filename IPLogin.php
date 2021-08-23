<?php
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_database','health tracker');
  $connection=mysqli_connect(db_server,db_username,db_password,db_database);
  if($connection){
      echo"Succeccfully connected to database <br>";

      
   if(isset($_POST['uname']) and isset($_POST['pass'])){
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    
    $query="SELECT * FROM ip_login WHERE uname='$username' and pass='$password'";
    
    $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
    
    $count=mysqli_num_rows($result);
    
    if($count==1)
    {
        $_SESSION['username']=$username;
        echo"You have logged in successfully";
        
        header("location: iphome.html");
    }
    else{
        $fmsg="Invalid username or password";
        echo"<br>Invalid username or password";
        
    }
  }
  }
else{
    echo"Failed to connect to database";
   }
  
?>