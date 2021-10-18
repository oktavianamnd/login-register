<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="n0-referrer">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="pic">
            <i class="fas fa-user"></i>
        </div>
        <h2 class="title">Register</h2>
        <form class="form" method="POST" action="login.php">
        <label for="name"></label>
            <input type="text" name="name" class="input" autocomplete="off" placeholder="Nama">
            <label for="username"></label>
            <input type="text" name="username" class="input" autocomplete="off" placeholder="Username">
            <label for="email"></label>
            <input type="text" name="email" class="input" autocomplete="off" placeholder="Email">
            <label for="password"></label>
            <input type="text" name="password" class="input" autocomplete="off" placeholder="Password">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>