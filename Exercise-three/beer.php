<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Beer extends Beverage 
{
    private $name;
    private $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price, string $temperature = 'cold') {
        parent::__construct($color, $price, $temperature);

        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage() :string {
        return 'The alcoholpercentage is '. $this->alcoholpercentage.'%.';
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);