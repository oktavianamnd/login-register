<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

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
        <h2 class="title">Login</h2>
        <form class="form" method="POST">
            <label for="username"></label>
            <input type="text" name="username" class="input" autocomplete="off" placeholder="Username">
            <label for="email"></label>
            <input type="text" name="email" class="input" autocomplete="off" placeholder="Email">
            <label for="password"></label>
            <input type="text" name="password" class="input" autocomplete="off" placeholder="Password">
            <br>
            <div>
                <p>Tidak punya akun?
                    <a href="register.php">Register</a>
                </p>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>