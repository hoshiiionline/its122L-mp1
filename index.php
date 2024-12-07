<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>watchIT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="https://www.freepnglogos.com/uploads/netflix-logo-0.png" alt="netflix logo" class="logo">
        <nav>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="?category=MV">Movies</a></li>
            <li><a href="?category=TVS">TV Shows</a></li>
            <li><a href="?category=JANIM">Anime</a></li>
            <li><a href="?category=JVM">Japanese Movies</a></li>
          </ul>
        </nav>
        <nav>
          <img src="https://i.pinimg.com/736x/0f/1d/bc/0f1dbc1f4de6d5d883087ff9ceb833c7.jpg" alt="user profile picture" class="profile-image">
        </nav>
    </header>

    <section class="feature">
        <div class="video-player">
            <video id="videoPlayer" autoplay>
                <source src="videos/trailer-kaguyasama-loveiswar.mp4" type="video/mp4">
            </video>
        </div>
        <p id="feature-caption">
    </section>

    <section class="carousel">
        <h2>Recommended For Youu!</h2>
        <div class="poster-container">
        <?php
                if (isset($_GET['category'])) {
                    $filterValue = $_GET['category'];

                    echo "Filter value: " . htmlspecialchars($filterValue);
                } else {
                    $filterValue = "";

                    echo "No filter value provided.";
                    echo "Filter value: " . htmlspecialchars($filterValue);
                }

                $movies = include('data/movies.php');
                foreach ($movies as $movie) {
                    if ($movie['category'] == $filterValue){
                        echo "
                            <div class='poster' trailerid='{$movie['trailerPath']}' titleid='{$movie['title']}'>
                            <img src='{$movie['posterPath']}' alt='{$movie['title']}'>
                            </div>
                            ";

                    } else if ($movie['category'] == ""){
                        echo "
                            <div class='poster' trailerid='{$movie['trailerPath']}' titleid='{$movie['title']}'>
                            <img src='{$movie['posterPath']}' alt='{$movie['title']}'>
                            </div>
                            ";
                    }
                }
            ?>         
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>