<?php
session_start();
include 'connection.php';
if(isset($_SESSION['name'])){
  if($_SESSION['name'] == 'admin'){
    header("Location: admin.php");
  }
  else if(!isset($_SESSION['ishoc'])){           //***added find again(in capital)
    header("Location: ..\user/userlogin.php");
  }

}
else{
  header("Location: login.php");
}
?>