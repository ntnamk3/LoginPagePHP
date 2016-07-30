<?php
session_start();
 if (isset($_SESSION["name"]))
 {
   unset($_SESSION["name"]);
   unset($_SESSION["password"]);

 }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/masterStyle.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
<div class="main">
<h1>Login</h1>

<form class="" action="check.php" method="post">
  <input type="text" name="usrName" value="">
  <input type="text" name="usrPassword" value="">
  <input type="submit" id="sub" name="name" value="Log In">
</form>
</div>


<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#sub").click(function() {
      console.log("ok");
      $("p").css({
        "display":"block"
      });

    })


  })
</script>

  </body>
</html>
