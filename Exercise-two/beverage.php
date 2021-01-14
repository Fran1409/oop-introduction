<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beverage 
{
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() :string {
        return 'This beverage is '. $this->temperature .' and '. $this->color .'.';
    }
}
