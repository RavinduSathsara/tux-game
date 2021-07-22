<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome To Tux</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.asp"></a></li>
        <li><a href="contact.asp"></a></li>
        <li><a href="about.asp"></a></li>
        <li style="float:right"><a class="active" href="contact.php">Contact</a></li>
      </ul>
      <h1>Wellcome To Tux</h1>
  <div class="register   " align="center " >
    <form action="register.php" class="form" method="POST">
        <input type="text" name="fullname" placeholder="Enter your name">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repassword" placeholder="Retype Password"> <br>
        <input type="submit" name="Register" >
    </form>
  </div>
 
</body>
</html>