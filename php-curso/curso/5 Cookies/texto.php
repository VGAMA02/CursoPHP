<?php
if(isset($_COOKIE['font-size']))
{
    $tamano = htmlspecialchars($_COOKIE['font-size']);
}
else
{
    $tamano = '100px';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p{
            font-size: <?php echo $tamano; ?>;
        }
    </style>
</head>
<body>
    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius dolore quidem iure accusamus minima eligendi quos labore doloremque consectetur veniam expedita dolor, saepe quam quo repellat, eaque, odio modi. Culpa! </p>
</body>
</html>