<?php
session_start();
if(isset($_SESSION["username"])){
}else{
echo header("location:login.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<link rel="stylesheet" href="style1.css" />
</head>
<body>
<div class="container">


<br>

<a href="login.php"><input type="submit" value="Logout"></a>
</div>
</body>
</html>