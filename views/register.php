<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>register now</h3>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <select name="user_type" id="">
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
            <input type="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="/login.php"></a></p>
        </form>
    </div>
</body>
</html>