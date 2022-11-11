<?php

class Player
{
    private string $name;
    private Element $choice;

    public function __construct(string $name = " Username ")
    {
        $this->name = $name;
    }

    public function setChoice(Element $choice): void
    {
        $this->choice = $choice;
    }

    public function getChoice(): Element
    {
        return $this->choice;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}