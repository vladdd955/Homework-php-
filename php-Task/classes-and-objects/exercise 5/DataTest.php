<?php

require_once "Date.php";

$date = new Date(10,27,1995);


 function changeDate($date)
 {
     $date->setDay(23) . "/" . $date->setMonth(05) . "/" . $date->setYear(1989);
 }


changeDate($date);


function DisplayDate($date)
{
    echo $date->getDay() . "/" . $date->getMonth() . "/" . $date->getYear();
}

DisplayDate($date);
