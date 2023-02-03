<?php
    require_once __DIR__ . '/models/Movie.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <?php
        $back_to_the_Future_I = new Movie('Back to the future', ['sci-fi', 'futuristic'], '02:12:45', 'part I');
        $back_to_the_Future_II = new Movie('Back to the future', ['sci-fi', 'futuristic'], '02:21:21', 'part II');
        $bullet_train = new Movie('Bullet Train', ['action', 'adrenalinic'], '01:48:24');
        
        echo $back_to_the_Future_I->getTitle().' - ';
        echo $back_to_the_Future_I->getSubtitle().' - ';
        echo $back_to_the_Future_I->getCategoriesToString(', ').' - ';
        echo $back_to_the_Future_I->getDuration().' - ';
        echo '<br>';
        echo $back_to_the_Future_II->getTitle().' - ';
        echo $back_to_the_Future_II->getSubtitle().' - ';
        echo $back_to_the_Future_II->getCategoriesToString(', ').' - ';
        echo $back_to_the_Future_II->getDuration().' - ';
        echo '<br>';
        echo $bullet_train->getTitle().' - ';
        echo $bullet_train->getCategoriesToString(' / ').' - ';
        echo $bullet_train->getDuration().' - ';
    ?>
</body>
</html>