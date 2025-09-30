<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <main class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Password</label>
                        <input type="password" id="senha" class="form-control">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Login">
                </form>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>