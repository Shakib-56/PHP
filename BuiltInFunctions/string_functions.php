<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
    
    $string="Hello student do you like the class";
    //how many characters are available in strings by strlen()

    echo strlen($string);
    echo "<br>";

    //convert upper case
    echo strtoupper($string);

    echo "<br>";

    //convert lower case
    echo strtolower($string);
    ?>
</body>
</html>