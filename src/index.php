<?php

include './autoload.php';

$fighterBuilder = new FighterBuilder('Victor');

$fighter01 = $fighterBuilder
    ->setNationality('Brasileira')
    ->setAge(27)
    ->setHeight(1.80)
    ->setWeight(94.23)
    ->setCategory()
    ->build();

$fighter01->show();
$fighter01->status();
