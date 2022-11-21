<?php


class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, String $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function getPG(array $movies): array
    {
        $moviesPGs = [];
        foreach ($movies as $movie) {
            if ($movie->getRating() === "PG") {
                $moviesPGs[] = $movie;
            }
        }
        return $moviesPGs;
    }
}