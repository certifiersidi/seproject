<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'=='POST']){
    $username = $_POST['john310'];
    $password = $_POST['elia554'];

    
    if ($username == 'john310' && $password == 'elia554'){
        $_SESSION['loggedin'] = true;

        header('Location : petowner.php');
        exit();
    }
    else{
        $error = 'Invalid username or password';
    }

}
?>
</body>
</html>