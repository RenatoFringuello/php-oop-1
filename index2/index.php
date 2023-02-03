<?php
    require_once __DIR__ . '/models/Movie.php';
    include_once __DIR__ . '/functions/functions.php';

    /**
     * get data from movie db call.
     * the file movies.json has 40 films (2 pages) result of query ='A' on get call
     * the file categories.json has all the categories available
     */
    $moviesJsonRaw = file_get_contents(__DIR__ . '/json/movies.json');
    $moviesJson = json_decode($moviesJsonRaw, true)['movies'];

    $categoriesJsonRaw = file_get_contents(__DIR__ . '/json/categories.json');
    $categoriesJson = json_decode($categoriesJsonRaw, true)['genres'];
    
    /**
     * to load all movies from moviesJson i used getCategoriesFromIds 
     * to convert the ids in movieJson film using the whole list of categories.
     */
    $movies = [];
    foreach ($moviesJson as $movieJson) {
        $movies[] = new Movie($movieJson['title'], getCategoriesFromIds($movieJson['genre_ids'], $categoriesJson), $movieJson['poster_path'], $movieJson['overview']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="bg-dark">
    <div class="container-lg">
        <h1 class="text-center text-white p-4">Movies <?php echo " (".Movie::getCount().")"?></h1>
        <div class="row g-4">

            <?php
                foreach ($movies as $index => $movie) {
                    echo "<div class=\"col-12 col-sm-6 col-md-4 col-xl-3\">";
                        echo "<div class=\"film-container card p-2 pb-0\">";
                            echo "<img class=\"mb-2 img-fluid object-fit-contain\" src={$movie->getImgPath()}>";
                            echo "<h4 class=\"mb-2 text-uppercase\">{$movie->getTitle()}</h4>";
                            echo "<p class=\"mb-2 text-secondary overflow-y-auto\">{$movie->getOverview()}</p>";
                            echo "<p class=\"mb-2 text-primary\">{$movie->getCategoriesToString(', ')}</p>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
            
        </div>
    </div>
</body>
</html>