<?php

class AsciiFigure
{
    const MULTI = 3;


    public function start(): void
    {
        do {
            $size = readline("Size -> ");

        } while ($size === false || $size <= 0);

        $this->char($size);
    }


        public function char(int $size): void
    {
        $width = ($size - 1)* self::MULTI;

        for ($i = 0; $i < $size; $i++) {
            echo str_repeat("/",$width - $i * self::MULTI );
            echo str_repeat("*",2 * $i * self::MULTI );
            echo str_repeat("\\",$width - $i * self::MULTI );
            echo "\n";
        }
    }
}

$program = new AsciiFigure();
$program->start();