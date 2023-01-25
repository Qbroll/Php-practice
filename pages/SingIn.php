<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
</head>

<body>
    <form action="../DB/check.php" method="POST" class="form-SingIn">
        <h1>Welcome</h1>
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Sing in">
       <div>
       <a href="/">Forgot Password</a>
       <a href="/pages/register.php">Dont have an account?</a>
       </div>
    </form>
</body>

</html>