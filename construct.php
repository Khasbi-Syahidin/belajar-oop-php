<?php
class Animal {
    public $name;
    public $sound;
    public $species;
    public function __construct($name, $sound = "Meawww", $species)
    {
        $this->name = $name;
        $this->sound = $sound;
        $this->species = $species;
    }
    public function make_sound()
    {
        return "Hewan  " . $this->name . " Bersuara " . $this->sound . " berjenis " . $this->species;
    }
}

$keledai = new Animal("Kucing", "RAAWWW", "Mamalia");

echo $keledai->make_sound();
echo "<br>";