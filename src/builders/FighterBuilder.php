<?php

class FighterBuilder
{
    public string $name = null;
    public string $nationality = null;
    public int $age = null;
    public float $height = null;
    public float $weight = null;
    public string $category = null;
    public int $wins = null;
    public int $losses = null;
    public int $draws = null;

    public function __construct(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function setNationality(string $nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

    public function setAge(string $age)
    {
        $this->age = $age;
        return $this;
    }

    public function setHeight(string $height)
    {
        $this->height = $height;
        return $this;
    }

    public function setWeight(string $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
        return $this;
    }

    public function setWins(string $wins)
    {
        $this->wins = $wins;
        return $this;
    }

    public function setLosses(string $losses)
    {
        $this->losses = $losses;
        return $this;
    }

    public function setDraws(string $draws)
    {
        $this->draws = $draws;
        return $this;
    }

    public function build()
    {
        return new Fighter($this);
    }
}
