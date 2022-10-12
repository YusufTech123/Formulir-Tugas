<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css" />
    <title>Login - Admin</title>
</head>
<body>
    <div class="form">
        <h2 id="judul1">Login</h2>
        <form action="admin.php" method="POST">
            <input type="text" name="username" id="user" placeholder="Username"/><br>
            <input type="password" name="password" id="pass" placeholder="Password" /><br>
            <button type="submit" name="sub" id="submit">Login</button>
        </form>
    </div>
</body>
</html>

