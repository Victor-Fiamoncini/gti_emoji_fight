<?php

class FighterBuilder
{
    public string $name;
    public string $nationality;
    public int $age;
    public float $height;
    public float $weight;
    public string $category;

    public function __construct(string $name)
    {
        $this->name = $name;
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

    public function setCategory()
    {
        if (!isset($this->weight) || $this->weight < 52.2) {
            throw new Error('Invalid or non-existent weight');
        }

        if ($this->weight <= 70.3) {
            $this->category = Category::LIGHTWEIGHT;

            return $this;
        }

        if ($this->weight <= 83.9) {
            $this->category = Category::MIDDLEWEIGHT;

            return $this;
        }

        if ($this->weight <= 120.2) {
            $this->category = Category::HEAVYWEIGHT;

            return $this;
        }

        throw new Error('Invalid weight');
    }

    public function build()
    {
        return new Fighter($this);
    }
}
