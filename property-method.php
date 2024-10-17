<?php
class Animal {
    public $name = "Binatang";
    public $sound = "Raaawww";
    public $species;

    public function make_sound()
    {
        return "Hewan  " . $this->name . " Bersuara " . $this->sound;
    }
}

$keledai = new Animal();
$keledai->name = "Keledai";
$keledai->sound = "Ngooooookk";
$keledai->species = "Mamalia";

$kucing = new Animal();
$kucing->name = "Kucing";
$kucing->sound = "Meong";
$kucing->species = "Mamalia";

echo $keledai->make_sound();
echo "<br>";
echo $kucing->make_sound();

// var_dump($keledai);