<?php
session_start();
$error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Username or password is invalid";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Koneksi ke database
        $mysqli = new mysqli("localhost", "root", "", "arkatama_store");

        // Mengecek koneksi
        if ($mysqli === false) {
            die("ERROR: Could not connect. " . $mysqli->connect_error);
        }

        // Query untuk mencari data user
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $mysqli->query($sql);

        // Mengecek apakah user ditemukan atau tidak
        if ($result->num_rows == 1) {
            // Menyimpan data user dalam session
            $_SESSION['name'] = $email;
            header("location: index.php");
        } else {
            $error = "Username or password is invalid";
        }
        $mysqli->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login CRUD</title>
    <style>
        body {
            background-color: #333;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }
        .login-form {
            width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .login-form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        .login-form input[type="text"], .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .login-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #666;
        }
        .login-form .error {
            color: #f00;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login CRUD</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label>Email</label>
            <input type="text" name="email" required><br>
            <label>Password</label>
            <input type="password" name="password" required><br>
            <input type="submit" name="submit" value="Login">
            <div class="error"><?php echo $error; ?></div>
        </form>
    </div>
</body>
</html>
