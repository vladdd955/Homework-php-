<?php

class Dog
{
    private string $name;
    private string $gender;

    public const MALE = "male";
    public const FEMALE = "female";

    private ?Dog $mother;
    private ?Dog $father;


    public function __construct(string $name, string $gender, ?Dog $mother = null, ?Dog $father = null)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->mother = $mother;
        $this->father = $father;

    }

    public function getName(): string
    {
       return $this->name;
    }
    public function getGender(): string
    {
        return $this->gender;
    }
    public function getFather(): ?Dog
    {
        return $this->father;
    }
    public function getMother(): ?Dog
    {
        return $this->mother;
    }

    public function sameMotherAs(Dog $dog): bool
    {
        if ($dog->getMother() === null || $this->getMother() === null) {
            return false;
        }
        return $dog->getMother()->getName() === $this->getMother()->getName();
    }
}

