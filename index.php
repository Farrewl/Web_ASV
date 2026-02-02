<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>{$error}</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aterkia ASV | Login</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
</head>

<body>
    <ul class="fireflies">
        <li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li>
    </ul>

    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post" autocomplete="off">
                <h2>Login to Aterkia ASV</h2>
                <?= showError($errors['login']); ?>
                
                <input type="text" name="username" placeholder="Username" required autocomplete="off" />
                <input type="password" name="password" placeholder="Password" required autocomplete="new-password"/>
                
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
            </form>
        </div>

        <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
            <form action="login_register.php" method="post" autocomplete="off">
                <h2>Register</h2>
                <?= showError($errors['register']); ?>
                
                <input type="text" name="username" placeholder="Username" required autocomplete="off" />
                <input type="email" name="email" placeholder="Email" required autocomplete="off"/>
                <input type="password" name="password" placeholder="Password" required autocomplete="new-password"/>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required autocomplete="new-password"/>
                
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
