<?php 
    session_start();
    if ($_SESSION['user']) {
        header('Location: adminpanel.php');
    }
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin HadiachStomat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }

        .error {
            background-color: #f2dede;
            color: #a94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
</head>

<body>

    <div class="login-form">
        <div class="card">
            <div class="card-header text-center">
                <h3>Адмін-Панель</h3>
            </div>
            <div class="card-body">
                <form action="login_check.php" method="post">
                    <div class="form-group">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class='error'> <?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <label for="login-form">Логін</label>
                        <input type="text" name="uname" class="form-control" id="uname" placeholder="Введіть логін"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Введіть пароль" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Увійти</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>