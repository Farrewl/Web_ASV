<?php

session_start();
require_once 'config.php';

// --- BAGIAN REGISTER ---  \\
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $_SESSION['register_error'] = 'Konfirmasi password tidak sesuai!';
        $_SESSION['active_form'] = 'register';
        header("Location: index.php");
        exit();
    }

    $checkUser = $conn->query("SELECT * FROM users WHERE email = '$email' OR username = '$username'");
    if ($checkUser->num_rows > 0) {
        $_SESSION['register_error'] = 'Username atau Email sudah terdaftar!';
        $_SESSION['active_form'] = 'register';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            // Opsional: Langsung login atau minta login ulang. Di sini kita minta login ulang.
            $_SESSION['active_form'] = 'login';
        } else {
            $_SESSION['register_error'] = 'Terjadi kesalahan sistem: ' . $conn->error;
            $_SESSION['active_form'] = 'register';
        }
    }

    header("Location: index.php");
    exit();
}

// --- BAGIAN LOGIN ---  \\
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            if ($user['username'] === 'aterkia') {
                header("Location: admin_page.php");
            } else {
                header("Location: user_page.php");
            }
            exit();

        } else {
            $_SESSION['login_error'] = 'Password salah!';
        }
    } else {
        $_SESSION['login_error'] = 'Username tidak ditemukan!';
    }

    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    exit();
}

?>