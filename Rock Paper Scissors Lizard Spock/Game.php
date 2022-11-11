<?php

class Game
{
    private Player $attacker;
    private Player $defender;

    public function __construct(Player $attacker, Player $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;
    }

    public function getWinner(): ?Player
    {

        if ($this->attacker->getChoice()->getName() === $this->defender->getChoice()->getName())
        {
            return null;
        }

        foreach ($this->attacker->getChoice()->getBeats() as $attackerWins) {
            if ($attackerWins->getName() === $this->defender->getChoice()->getName()) {
                return $this->attacker;
            }
        }

        return $this->defender;
    }
}



