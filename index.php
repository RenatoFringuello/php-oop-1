<?php
    require_once __DIR__ . '/models/Movie.php';
    $movies = [
        new Movie('Back to the future', ['sci-fi', 'futuristic'], '02:12:45', 'part I'),
        new Movie('Back to the future', ['sci-fi', 'futuristic'], '02:21:21', 'part II'),
        new Movie('Bullet Train', ['action', 'adrenalinic'], '01:48:24'),
        new Movie('Bullet Train', ['action', 'adrenalinic'], '01:48:24'),
        new Movie('Bullet Train', ['action', 'adrenalinic'], '01:48:24'),
        new Movie('Bullet Train', ['action', 'adrenalinic'], '01:48:24'),
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container-lg">
        <h1 class="text-center text-white p-4">Movies</h1>
        <div class="row g-4">

            <?php
                foreach ($movies as $index => $movie) {
                    echo "<div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">";
                        echo "<div class=\"film-container card p-2 pb-0\">";
                            echo "<h4 class=\"mb-2 text-uppercase\">{$movie->getTitle()}</h4>";
                            echo "<p class=\"mb-2\">{$movie->getCategoriesToString(', ')}</p>";
                            echo "<pre class=\"mb-2 text-secondary\">{$movie->getDuration()}</pre>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
            
        </div>
    </div>
</body>
</html>