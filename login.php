<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="login/login-access.php" method="post">
            <div class="form_div">
                <label>Username:</label>
                <input class="field_class" name="login_txt" type="text" placeholder="Your Username" autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" name="password_txt" type="password" placeholder="Password">
                <button class="submit_class" type="submit" form="login_form" onclick="return validarLogin()">Submit</button>
            </div>
        </form>
    </main>
    <footer>
        <p>© 2022 Design by <a href="#">Yummy Bakery&trade;</a></p>
    </footer>
</body>
</html>