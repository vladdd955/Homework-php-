<?php

class Date
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    // Getter

    public function getDay(): int
    {
        return $this->day;
    }
    public function getMonth(): int
    {
        return $this->month;
    }
    public function getYear(): int
    {
        return $this->year;
    }

    //Setter

    public function setDay( int $newDay): int
    {
        return $this->day = $newDay;
    }
    public function setMonth(int $newMonth): int
    {
        return $this->month = $newMonth;
    }
    public function setYear(int $newYear): int
    {
        return $this->year = $newYear;
    }

}

