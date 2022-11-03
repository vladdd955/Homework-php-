<?php

class Geometry
{
    static function circle($radius)
    {
        if ($radius < 0) {
            echo ' Error, you ENTER negative number';
            return 0.0;
        }
        return M_PI * $radius * 2;
    }

    static function rectangle($length, $width)
    {
        if ($length < 0 || $width < 0) {
            echo 'Error, you ENTER negative number';
            return 0.0;
        }
        return $length * $width;

    }

    static function triangle($base, $height)
    {
        if ($base < 0 || $height < 0) {
            echo 'Error, you ENTER negative number';
            return 0.0;
        }
        return $base * $height * 0.5;
    }
}

function numCheck($input)
{
    do{
        $num = readline($input);
    } while(!is_numeric($num));
    return $num;

};

while(true)
{
    echo "Geometry Calculator ". PHP_EOL;
    echo "1. Calculate the Area of a Circle " . PHP_EOL;
    echo "2. Calculate the Area of a Rectangle ". PHP_EOL;
    echo "3. Calculate the Area of a Triangle ". PHP_EOL;
    echo "4. Quit " . PHP_EOL;


    $userSelection = readline('Enter your choice (1-4) : ');

    echo PHP_EOL;

    if (!ctype_digit($userSelection)) {
        echo "Error:  !!! Not a number!!!";
        continue;
    }

    switch ($userSelection) {
        case 1:
            $radius = numCheck('Radius: ');
            $area = Geometry::circle($radius);
            printf("The area of the circle is %.2f" . PHP_EOL, $area);
            break;
        case 2:
            $length = numCheck('Length: ');
            $width = numCheck('Width: ');
            $area = Geometry::rectangle($length, $width);
            printf("The area of the rectangle is %.2f" . PHP_EOL, $area);
            break;
        case 3:
            $base = numCheck('Base: ');
            $height =  numCheck('Height: ');
            $area = Geometry::triangle($base, $height);
            printf("The area of the triangle is %.2f" . PHP_EOL, $area);
            break;
        case 4:
            exit(0);
        default:
            echo '!!! Error !!!'. PHP_EOL;
            break;
    }
}



