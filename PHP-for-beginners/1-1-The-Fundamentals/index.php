<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    <?php
    $name = "dark matter";
    $read = true;

    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have not read the book";
    }
    ?>

    <h1>
        <?= $message; ?>
    </h1>
</h1>

</body>
</html>