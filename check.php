<?php

$userName=$_POST["usrName"];
$userPassword=$_POST["usrPassword"];

if (isset($userName)&&isset($userPassword)) {
    if (empty($userName)||empty($userPassword)) {
      header("Location:index.php");
    }
    else{
      if ($userName=="admin" && $userPassword=="123456"){
        session_start();
        $_SESSION["name"]=$userName;
        $_SESSION["password"]=$userPassword;
        header("Location:profile.php");
      }
      else {
          header("Location:index.php");
      }
  }
}
else {
  echo "ooopps! go and ovverwrite your code";
}

 ?>
