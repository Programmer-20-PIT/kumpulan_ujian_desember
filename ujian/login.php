<?php
session_start(); // Memulai sesi PHP

if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == 'IrulesDev' && $password == 'Fauzan@123') {
        
        $_SESSION['username'] = $username;
        
        header("Location: admin.php");
        // exit;
    } else {
        header("Location: user.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <!-- Menampilkan error jika login gagal -->
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <!-- Form login -->
    <form action="" method="POST">
        <p>Username: <input type="text" name="username" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
