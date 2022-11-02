<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
*{
    margin: 0;
    padding: 0;
}
body{
    background-color:dimgray;
}
form{
    margin :17em;
    border: 2px solid darkorange;
}
.submit{
    width: 3em;
    height: 5px;
}
</style>
</head>
<body>
<form method="post" action="">
<h1>Login</h1>
<label for="Username">Username</label>
<input type="text" name="Username" id="Username" required><br><br><br>

<label for="Password">Password</label>
<input type="Password" name="Password" id="Password" required> <br><br><br>
<input type="submit" name="submit" id="submit">
</form>
</body>
</html>
