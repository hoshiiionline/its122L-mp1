<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>watchIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="/data/WatchIt-removebg-preview.png" alt="netflix logo" class="logo">
        <nav>
          <ul>
            <li><a href="?#">Home</a></li>
            <li><a href="?category=MV">Movies</a></li>
            <li><a href="?category=TVS">TV Shows</a></li>
            <li><a href="?category=JANIM">Anime</a></li>
            <li><a href="?category=JMV">Japanese Movies</a></li>
          </ul>
        </nav>
        <nav>
          <img src="https://i.pinimg.com/736x/0f/1d/bc/0f1dbc1f4de6d5d883087ff9ceb833c7.jpg" alt="user profile picture" class="profile-image">
        </nav>
    </header>

    <section class="feature">
        <div class="video-player">
            <video id="videoPlayer" autoplay>
                <?php
                if (isset($_GET['category'])) {
                    $filterValue = $_GET['category'];
                } else {
                    $filterValue = "ANY";
                }

                switch ($filterValue) {
                    case "MV":
                        $header = "Movies for You";
                        break;
                    case "TVS":
                        $header = "TV Shows for You";
                        break;
                    case "JANIM":
                        $header = "Anime Shows for You";
                        break;
                    case "JMV":
                        $header = "Japanese Movies for You";
                        break;
                    case "ANY":
                        $header = "Recommended for You";
                        break;
                    default:   
                        $header = "ERROR";
                }
                $movies = include('data/movies.php');
                foreach ($movies as $movie) {
                    if ($movie['category'] == $filterValue){
                        echo "
                            <source src='{$movie['trailerPath']}' type='video/mp4'>
                            ";
                        break;
                    } else if ($filterValue == "ANY"){
                        echo "
                            <source src='{$movie['trailerPath']}' type='video/mp4'>
                            ";
                        break;
                    }

                }
            ?>         
            </video>
        </div>
    </section>

    <section class="carousel">
        <h2><?php echo "{$header}";?></h2>
        <div class="poster-container">
        <?php
                foreach ($movies as $movie) {
                    if ($movie['category'] == $filterValue){
                        echo "
                            <div class='poster' trailerid='{$movie['trailerPath']}' titleid='{$movie['title']}'>
                            <img src='{$movie['posterPath']}' alt='{$movie['title']}'>
                            </div>
                            ";

                    } else if ($filterValue == "ANY"){
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