<?php

include 'autoload.php';

try {
    $fighterBuilder = new FighterBuilder();

    $fighter01 = $fighterBuilder
        ->setName('Lutador 01')
        ->setNationality('Brasileira')
        ->setAge(27)
        ->setHeight(1.80)
        ->setWeight(94.23)
        ->setCategory()
        ->setWins(2)
        ->setLosses(1)
        ->setDraws(1)
        ->build();

    $fighter02 = $fighterBuilder
        ->setName('Lutador 02')
        ->setNationality('Brasileira')
        ->setAge(25)
        ->setHeight(1.70)
        ->setWeight(91.33)
        ->setCategory()
        ->setWins(4)
        ->setLosses(2)
        ->setDraws(3)
        ->build();

    $fight = new Fight($fighter01, $fighter02);

    $fight->scheduleFight()->beginFight();
} catch (Throwable $th) {
    echo $th->getMessage();
}


