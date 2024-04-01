<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Salehni</title>
</head>
<body>
<h1 style="text-align:center">LOGIN</h1>
<div style="background-image:url(src/img/photo_2024-02-18_13-34-43.jpg);
padding-top:70px;
background-position: center;
background-repeat: no-repeat;
padding-bottom:70px;
">

</div>

<form method="post" action="api/process_login.php">
<div class="loginarea">
    <p>Enter your username </p>
    <input type="text" name="email" id="email">
    <p>Enter your password</p>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit" class="loginbutt" name="login">Login</button>
</div> 
</form>
    
</body>
</html>
