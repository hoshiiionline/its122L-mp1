<?php 
/*
movies - mv
tv show - tvs
anime - janim
japanese movie - jvm
*/

$tofilter = "";
$movies = [
    [
        "title" => "Back to the Future",
        "trailerPath" => "videos/trailer-backtothefuture.mp4",
        "posterPath" => "posters/poster-backtothefuture.jpg",
        "category" => "MV"
    ],
    [
        "title" => "Barbie",
        "trailerPath" => "videos/trailer-barbie.mp4",
        "posterPath" => "posters/poster-barbie.jpg",
        "category" => "MV"
    ],
    [
        "title" => "Guardians of the Galaxy",
        "trailerPath" => "videos/trailer-gotg.mp4",
        "posterPath" => "posters/poster-gotg.jpg",
        "category" => "MV"
    ],
    [
        "title" => "Avengers: Infinity War",
        "trailerPath" => "videos/trailer-infinitywar.mp4",
        "posterPath" => "posters/poster-infinitywar.jpg",
        "category" => "MV"
    ],
    [
        "title" => "Spiderman: Into the Spiderverse",
        "trailerPath" => "videos/trailer-intothespiderverse.mp4",
        "posterPath" => "posters/poster-intothespiderverse.jpg",
        "category" => "MV"
    ],
    [
        "title" => "Oppenheimer",
        "trailerPath" => "videos/trailer-oppenheimer.mp4",
        "posterPath" => "posters/poster-oppenheimer.jpg",
        "category" => "MV"
    ],
    [
        "title" => "The Social Network",
        "trailerPath" => "videos/trailer-socialnetwork.mp4",
        "posterPath" => "posters/poster-socialnetwork.jpg",
        "category" => "MV"
    ],
    [
        "title" => "We Live in Time",
        "trailerPath" => "videos/trailer-weliveintime.mp4",
        "posterPath" => "posters/poster-weliveintime.jpg",
        "category" => "MV"
    ],
    [
        "title" => "Kaguya-Sama: Love is War",
        "trailerPath" => "videos/trailer-kaguyasama-loveiswar.mp4",
        "posterPath" => "posters/poster-kaguyasama-loveiswar.jpg",
        "category" => "JMV"
    ],
    [
        "title" => "Kimi No Nawa",
        "trailerPath" => "videos/trailer-kiminonawa.mp4",
        "posterPath" => "posters/poster-kiminonawa.jpg",
        "category" => "JMV"
    ],
    [
        "title" => "Weathering With You",
        "trailerPath" => "videos/trailer-weatheringwithyou.mp4",
        "posterPath" => "posters/poster-weatheringwithyou.jpg",
        "category" => "JMV"
    ],
    [
        "title" => "The Wind Rises",
        "trailerPath" => "videos/trailer-thewindrises.mp4",
        "posterPath" => "posters/poster-thewindrises.jpg",
        "category" => "JMV"
    ],
    [
        "title" => "Suzume",
        "trailerPath" => "videos/trailer-suzume.mp4",
        "posterPath" => "posters/poster-suzume.jpg",
        "category" => "JMV"
    ],
    [
        "title" => "Spirited Away",
        "trailerPath" => "videos/trailer-spiritedaway.mp4",
        "posterPath" => "posters/poster-spiritedaway.jpg",
        "category" => "JMV"
    ],
    [
        "title" => "The Walking Dead",
        "trailerPath" => "videos/The Walking Dead.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BYWQwMGRhNGEtZTNhMy00MzVjLWJhMjItYjcwMDljMTkyNTg2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "The Boys",
        "trailerPath" => "videos/The Boys.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BMWJlN2U5MzItNjU4My00NTM2LWFjOWUtOWFiNjg3ZTMxZDY1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "Fallout",
        "trailerPath" => "videos/Fallout.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BNjI5ZmZkNDktZDliMS00ZjlmLWE2MTUtMWVlZjU2YWQ3ZDYxXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "The Last of Us",
        "trailerPath" => "videos/The Last of Us.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BY2JiNjU3NWYtMTRlYS00NzY3LWE2NDQtZGFkNWE2MDU4OTExXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "BoJack Horseman",
        "trailerPath" => "videos/BoJack Horseman.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BZmMwMDlkNTEtMmQzZS00ODQ0LWJlZmItOTgwYWMwZGM4MzFiXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "The Big Bang Theory",
        "trailerPath" => "videos/TBBT.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BZjgzY2QyNzItNDhhYi00ZWIwLWFjN2UtZDJkN2MxYWNjMmJjXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "Arcane",
        "trailerPath" => "videos/Arcane.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BOWJhYjdjNWEtMWFmNC00ZjNkLThlZGEtN2NkM2U3NTVmMjZkXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "Breaking Bad",
        "trailerPath" => "videos/Breaking Bad.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BMzU5ZGYzNmQtMTdhYy00OGRiLTg0NmQtYjVjNzliZTg1ZGE4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "The Simpsons",
        "trailerPath" => "videos/The Simpsons.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BNTU2OWE0YWYtMjRlMS00NTUwLWJmZWUtODFhNzJiMGJlMzI3XkEyXkFqcGc@._V1_.jpg",
        "category" => "TVS"
    ],
    [
        "title" => "Stranger Things",
        "trailerPath" => "videos/Stranger Things.mp4",
        "posterPath" => "https://m.media-amazon.com/images/M/MV5BMjE2N2MyMzEtNmU5NS00OTI0LTlkNTMtMWM1YWYyNmU4NmY0XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
        "category" => "TVS"
    ],

];

return $movies;
?>