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

    public function getCatergory()
    {
        return $this->category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function show()
    {
        echo "
            Lutador: {$this->name};
            Origem: {$this->nationality};
            Idade: {$this->age} anos;
            Altura: {$this->height}m;
            Pesando: {$this->weight} Kg;
            Ganhou: {$this->wins};
            Perdeu: {$this->losses};
            Empatou: {$this->draws};
            <br />
        ";
    }

    public function status()
    {
        echo "
            Lutador: {$this->name};
            É um peso: {$this->category};
            {$this->wins} vitórias;
            {$this->losses} derrotas;
            {$this->draws} empates;
            <br />
        ";
    }

    public function winTheFight()
    {
        $this->wins += 1;
    }

    public function loseTheFight()
    {
        $this->losses += 1;
    }

    public function tieTheFight()
    {
        $this->draws += 1;
    }
}
