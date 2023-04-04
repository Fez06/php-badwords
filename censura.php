<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 2</title>
</head>
<body>
    <?php

    //echo $_POST['testo'];
    //echo $_POST['parola'];
     

    ?>

    <p><?php echo $_POST['testo'] ?></p>
    <p><?php echo strlen($_POST['testo']) ?></p>
    <br>
    <br>
    <p><?php echo str_replace($_POST['parola'], '***', $_POST['testo']) ?></p>
    <p><?php echo strlen(str_replace($_POST['parola'], 'xxx', $_POST['testo'])) ?></p>
</body>
</html>