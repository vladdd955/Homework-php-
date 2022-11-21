<?php

require_once "movie.php";



$movies = [
    new Movie(" Casino Royale ", "Eon Productions", "PG13"),
    new Movie(" Glass ", "Buena Vista International", "PG13"),
    new Movie(" Spider-Man: Into the Spider-Verse ", "Columbia Pictures", "PG"),
];



foreach ($movies as $key => $movie) {
    echo "[$key]" . $movie->getTitle()."\n";
}
