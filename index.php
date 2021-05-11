<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-2</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);

    require 'User.php';

    $userFirst = new User(0, 'Stefano', 'Tosatto', 'ste@google.com', '07 / 09 / 1987');
    $userCatch = new User(1, 'Sebastiano', 'Dossetto', 'seba@google.com', '15 / 10 / 2000');
    $userVars = get_class_vars('User');
    ?>

    <h1>Blog</h1>
    <h3>Ecco gli utenti del blog:</h3>
    <div class="container">
        <ul>
            <h4><?php $userFirst->getId();  ?></h4>
            <?php foreach ($userFirst as $key => $value) { ?>
                <li><?php echo $key . ': ' . $value; ?></li>
            <?php } ?>
        </ul>
        <ul>
            <h4><?php try {
                $userCatch->setId(1); 
                echo $userCatch->getId();
            } catch(Exception $e) {
                echo 'Exception: '.$e->getMessage();
            }?></h4>
            
            <?php foreach ($userCatch as $key => $value) { ?>
                <li><?php echo $key . ': ' . $value; ?></li>
            <?php } ?>
        </ul>
    </div>


</body>

</html>