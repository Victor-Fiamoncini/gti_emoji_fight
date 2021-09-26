<?php

class Fighter
{
    private string $name;
    private string $nationality;
    private int $age;
    private float $height;
    private float $weight;
    private string $category;
    private int $wins;
    private int $losses;
    private int $draws;

    public function __construct(FighterBuilder $fighterBuilder)
    {
        $this->name = $fighterBuilder->name;
        $this->nationality = $fighterBuilder->nationality;
        $this->age = $fighterBuilder->age;
        $this->height = $fighterBuilder->height;
        $this->weight = $fighterBuilder->weight;
        $this->category = $fighterBuilder->category;
        $this->wins = $fighterBuilder->wins;
        $this->losses = $fighterBuilder->losses;
        $this->draws = $fighterBuilder->draws;
    }

    public function show()
    {
    }

    public function status()
    {
    }

    public function winTheFight()
    {
    }

    public function loseTheFight()
    {
    }

    public function tieTheFight()
    {
    }
}
