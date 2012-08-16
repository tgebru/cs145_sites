<?php
session_start();
include ('./mysqldb.php');
$username= $_GET['username']; //Set UserName
$password= $_GET['password']; //Set Password
$msg = '';
if (isset($_SESSION['name'])){
     $msg = "You are already logged in";
     header("location:login.php?msg=$msg");	
}else if (isset($username, $password)) {
     ob_start();
     $myusername = stripslashes($username);
     $myusername = mysqli_real_escape_string($db, $myusername);
     $query= "SELECT UserID from Users WHERE UserID='$username'"; 
     echo $query;
     try {
          $result = $db->query($query);
          $row  = $result->fetch(); 
          if($row != null) {
              $_SESSION['name']=$username; 
              if(isset($_SESSION['url']))
                 $url = $_SESSION['url'];
              else
                 $url="index.php";
              header("location:$url");
          }else {
             $msg = "Wrong Username or Pssword. Please retry";
             header("location:login.php?msg=$msg");	
          }
      } catch (PDOException $e) {
          $msg = "Wrong Username or Pssword. Please retry";
          header("location:login.php?msg=$msg");	
      }
      ob_end_flush();
      $db=null;
} else {
   header("location:login.php?msg=Please enter your Username and Password");
}
?>
