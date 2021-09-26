<?php

class Fight
{
    private ?Fighter $challenged = null;
    private ?Fighter $challenger = null;
    private ?bool $isApproved = null;

    public function __construct() {}

    public function cancelFight()
    {
        $this->challenged = null;
        $this->challenger = null;
        $this->isApproved = false;
    }

    public function scheduleFight(Fighter $challenged, Fighter $challenger)
    {
        $this->challenged = $challenged;
        $this->challenger = $challenger;

        if ($this->challenged->getCatergory() !== $this->challenger->getCatergory()) {
            $this->cancelFight();

            throw new Error('Invalid fighter categories');
        }

        if ($this->challenged === $this->challenger) {
            $this->cancelFight();

            throw new Error('The fight must have two different fighters');
        }

        $this->isApproved = true;
    }

    public function beginFight()
    {
        if (!$this->isApproved) {
            throw new Error('The fight must be isApproved');
        }

        $this->challenged->show();
        $this->challenger->show();

        $winnerOrDraw = rand(0, 2);

        $resolveFight = [
            0 => function() {
                echo 'Empatou <br />';
                $this->challenged->tieTheFight();
                $this->challenger->tieTheFight();
            },
            1 => function() {
                echo "Desafiado: {$this->challenged->getName()} ganhou <br />";
                $this->challenged->winTheFight();
                $this->challenger->loseTheFight();
            },
            2 => function() {
                echo "Desafiante: {$this->challenger->getName()} ganhou <br />";
                $this->challenged->loseTheFight();
                $this->challenger->winTheFight();
            },
        ];

        $resolveFight[$winnerOrDraw]();

        $this->challenged->status();
        $this->challenger->status();
    }
}
