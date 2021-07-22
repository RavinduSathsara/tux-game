<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.asp"></a></li>
        <li><a href="contact.asp"></a></li>
        <li><a href="about.asp"></a></li>
        <li style="float:right"><a class="active" href="contact.php">Contact</a></li>
      </ul>
        <h1>Congratulation! <br>You are now in Tux Family</h1>
      <div class="register   " align="center " >
        <form action="get.php" class="form">
            <input type="text" name="fullname" placeholder="Enter your Username">
           
            <input type="password" name="password" placeholder="UserPassword">
                <br>
            <input type="submit" name="login" value="Login" >
        </form>
      </div>
</body>
</html>