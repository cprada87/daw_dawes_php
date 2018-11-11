<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Linus Torvalds</title>

</head>

<body>

<?php
    $str = 'Who created Linux?';
    $title = $str;

    $name = 'Linus Torvalds';
    $age = 48;
    $isAlive = True;

    echo "<h1>".$title. "</h1>";
    echo "<p>". "Name: ". $name. "</p>";
    echo "<p>". "Age: ". $age. "</p>";

    if ($isAlive == True) {
        echo "<p>". "Is he/she/it alive?: ". "Yes, he/she/it is.". "</p>";
    } else {
        echo "<p>". "Is he/she/it alive?: ". "No, he/she/it isn't.". "</p>";
        }
    ?>

    <a href="https://es.wikipedia.org/wiki/Linus_Torvalds">Source here</a>

</body>
</html>