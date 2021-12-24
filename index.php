
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .warp{
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">
    <h1 class="h3 mb-3">Login</h1>

    <?php if (isset($_GET['registered'])) : ?>
        <div class="alert alert-success">
            Account created. Please login.
        </div>
    <?php endif ?>

    <?php if (isset($_GET['suspended'])): ?>
        <div class="alert alert-danger">
            Your account is suspended.
        </div>
    <?php endif ?>

    <?php if (isset($_GET['incorrect'])) : ?>
        <div class="alert alert-warning">
            Incorrect Email or Pasword
        </div>
    <?php endif ?>

    <div class="warp">
        <form action="_actions/login.php" method="POST">
            <input type="text" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>
</body>
</html>