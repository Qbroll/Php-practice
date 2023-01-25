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
    <form action="../DB/Singup.php" method="POST" class="form-register">
        <h1>Welcome</h1>
        <input type="text" name="login" placeholder="Login">    
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirm" placeholder="Password Confirmation">
        <input type="submit" value="Register">
        <a href="/pages/SingIn.php">I have account</a>
    </form>
</body>

</html>