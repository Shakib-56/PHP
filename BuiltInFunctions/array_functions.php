<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayFunctions</title>
</head>
<body>
    <?php
    $list=[343,34,323,23,54,232,453];

    //here max() function gives the maximum values from the arrays
    echo max($list);
    echo "<br>";
    //here min() function gives the minimum values from the arrays
    echo min($list);

    echo "<br>";

    sort($list);
    //Now i wanted to see the array list items by indexing here comes print_r() function
    print_r($list);


    ?>
</body>
</html>