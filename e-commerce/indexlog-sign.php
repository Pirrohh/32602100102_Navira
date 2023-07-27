<?php 
 include 'config/databaseuser.php';
 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "INSERT * FROM user values ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo"<script languange='javasript'>
        alert('Proses data berhasil Login)');
        window.open('login.php,'_top')
        </script>";

    }else{
        echo"<script languange='javasript'>
        alert('Proses data gagal Login)');
        window.open('login.php,'_top')
        </script>";
    }
  }     
 
?>
 