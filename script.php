<?php
$censoredWord = $_GET["censoredWord"];
$paragraph = $_GET["paragraph"];

$hide = '***';
$cleanParagraph = str_replace($censoredWord, $hide, $paragraph);
$cleanParagraphLenght =  strlen($cleanParagraph);

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
        Censored Word : <?php echo $censoredWord ?>
    </p>
    <p>
        Your Clean Paragraph : <?php echo $cleanParagraph ?>
    </p>
    <p>
        Your Paragraph Has : <?php echo $cleanParagraphLenght ?> Characters
    </p>
</body>
</html>