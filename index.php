<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "userwebsiteklmk");
$select = mysqli_query($conn, "SELECT * FROM user");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);
        if ($data['level'] == "admin") {
            $_SESSION['login'] = true;
            header("location:e-commerce/products.php");
        }
        if ($data['level'] == "user") {
            $_SESSION['login'] = true;
            header("location:e-commerce/products.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - animation login page</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> meta.codes - Animated Login and Registration Form </title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="wrapper">
            <div class="form-wrapper sign-up">
                <form action="">
                    <h2>Sign Up</h2>
                    <div class="input-group">
                        <input type="text" required>
                        <label for="">Username</label>
                    </div>
                    <div class="input-group">
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="input-group">
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                    <div class="sign-link">
                        <p>Already have an account? <a href="#" class="signIn-link">Sign In</a></p>
                    </div>
                </form>
            </div>

            <div class="form-wrapper sign-in">
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="input-group">
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn" name="submit">Login</button>
                    <div class="sign-link">
                        <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>

        <script src="script.js"></script>
    </body>

    </html>
    <!-- partial -->
    <script src="./script.js"></script>

</body>

</html>