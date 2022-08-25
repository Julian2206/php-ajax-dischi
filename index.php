<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo">
        </div>
    </header>

    <main>
        <div class="container">
            <ul>
                <?php foreach ($database as $cd) { ?>

                    <li>
                        <img src="<?php echo $cd['poster']; ?>" alt="poster cd">
                        <h3><?php echo $cd["title"]; ?></h3>
                        <p><?php echo $cd["author"]; ?></p>
                        <small><?php echo $cd["year"]; ?></small>
                    </li>
                <?php  } ?>

            </ul>
        </div>
    </main>
</body>

</html>