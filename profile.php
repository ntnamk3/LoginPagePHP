<?php
session_start();
 if (!isset($_SESSION["name"]))
 {
   header("Location:index.php");
 }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
      <link rel="stylesheet" href="css/masterStyle.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
 <div class="main">
<h1>You are Logged in</h1>
<h4 style="margin-top30px">This page is protected. You can't visit this page if you're not logged in. </h4>
<a href="index.php" class="mya">Loge Out</a>
 </div>
  </body>
</html>
