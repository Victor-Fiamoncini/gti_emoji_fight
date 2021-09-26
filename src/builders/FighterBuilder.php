<?php

class FighterBuilder
{
    public string $name = '';
    public string $nationality = '';
    public int $age = 0;
    public float $height = 0;
    public float $weight = 0;
    public string $category = '';
    public int $wins = 0;
    public int $losses = 0;
    public int $draws = 0;

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function setNationality(string $nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    public function setHeight(float $height)
    {
        $this->height = $height;

        return $this;
    }

    public function setWeight(float $weight)
    {
        $this->weight = $weight;

        return $this;
    }

    public function setCategory()
    {
        if (!isset($this->weight) || $this->weight < 52.2) {
            throw new Error('Invalid or non-existent weight');
        }

        if ($this->weight <= 70.3) {
            $this->category = Category::LIGHT;

            return $this;
        }

        if ($this->weight <= 83.9) {
            $this->category = Category::MIDDLE;

            return $this;
        }

        if ($this->weight <= 120.2) {
            $this->category = Category::HEAVY;

            return $this;
        }

        throw new Error('Invalid weight');
    }

    public function setWins(int $wins)
    {
        $this->wins = $wins;

        return $this;
    }

    public function setLosses(int $losses)
    {
        $this->losses = $losses;

        return $this;
    }

    public function setDraws(int $draws)
    {
        $this->draws = $draws;

        return $this;
    }

    public function build()
    {
        return new Fighter($this);
    }
}
