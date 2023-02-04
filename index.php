<?php
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>
            <?php
            echo $movie1->getTitle();
            ?>
        </h1>
        <h2>
            <?php
            echo $movie1->getYear();
            ?>
        </h2>
        <h3>
            <?php
            echo $movie1->getGenre();
            ?>
        </h3>
        <span>
            <?php
            echo $movie1->getDescription();
            ?>
        </span>
        <span>
            <?php
            echo $movie1->getVote();
            ?>
        </span>

    </div>
</body>

</html>