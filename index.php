<?php
$name = $_GET["name"];
$surname = $_GET["surname"];
$password = $_GET["password"];
$hide = '***';
$hiddenPassword = str_replace($password, $hide, $password);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hello Word</title>
</head>
<body>
    <p>
        Your Name : <?php echo $name ?>
    </p>
    <p>
        Your Surame : <?php echo $surname ?>
    </p>
    <p>
        Your Password : <?php echo $hiddenPassword ?>
    </p>
</body>
</html>