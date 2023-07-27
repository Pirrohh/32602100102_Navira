<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: animation-login-page/dist/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" type="text/css" href="style.css">-->
        <title>Berhasil Login</title>
    </head>
    <body>
        <div class="container-fluid">
            <?php include 'products.php'; ?>
             <?php echo "<h1>Selamat Datang, " . $_SESSION['name'] . "!" . "</h1>"; ?>
<!--            <form action="" method="POST" class="login-email">
                <?php echo "<h1>Selamat Datang, " . $_SESSION['name'] . "!" . "</h1>"; ?>

                <div class="input-group">
                    <a href="logout.php" class="btn">Logout</a>
                </div>
            </form>-->
        </div>
    </body>
</html>
