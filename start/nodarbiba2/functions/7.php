<?php

echo "Welcome to gunstore!\n";

class Person
{
    public $name;
    public $licenses;
    public $cash;

    public function __construct($name, $licenses, $cash)
    {
        $this->name = $name;
        $this->licenses = $licenses;
        $this->cash = $cash;
    }

    public function getLicense($license): bool
    {
        return in_array($license, $this->licenses);
    }
}

class Gun
{
    public $name;
    public $license;
    public $price;

    public function __construct($name, $license, $price)
    {
        $this->name = $name;
        $this->license = $license;
        $this->price = $price;
    }
}

class Gunstore
{
    public $guns;

    public function __construct($guns)
    {
        $this->guns = $guns;
    }

    public function availableGuns($person, $gun): bool
    {
        return $person->getLicense($gun->license) && $person->cash >= $gun->price;
    }
}

$guns = [
    new Gun('Pistol', 'A', 1500),
    new Gun('Rifle', 'B', 3500),
    new Gun('Machinegun', 'C', 5000),
    new Gun('Cannon', 'D', 6000),
    new Gun('Crossbow', 'A', 5050)
];

$store = new Gunstore($guns);
$person = new Person('John Shooter', ["A", "B", "C"], 5000);

echo $person->name . " can buy the following guns: \n";

foreach ($store->guns as $gun) {
    if ($store->availableGuns($person, $gun)) {
        echo $gun->name . " - Price: " . $gun->price . "\n";
    }
}

