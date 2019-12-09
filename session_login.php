<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    <form action="proses_session_login.php" method="POST">
        <label for="uname">Username</label>
        <input type="text" name="un" id="uname">
        <br>
        <label for="pass">Password</label>
        <input type="password" name="pw" id="pass">
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>