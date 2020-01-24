<?php
/**
 * File class example
 * Visibility ada 3 : Public, Protected, Private
 * Public digunakan untuk bisa diakses secara global / public
 * Protected digunakna untuk membatasi akes public tapi masih bisa oleh pewaris (inheritance)
 * Private digunakan untuk membatasi akses dari luar class itu sendiri, jadi hanya di kelas itu saja
 *
 */

/**
 * Class Hewan
 * @var name string
 * @var color string
 * @return string
 */
class Hewan
{

    private $name;
    private $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    private function getName() {
        return $this->name;
    }

    private function getColor() {
        return $this->color;
    }

    public function getHewan() {
        return "Hi, Saya {$this->getName()} berwarna {$this->getColor()}.";
    }

}

/**
 * Class Kucing merupakan pewarisan dari class Kucing
 * @var name string
 * @var color string
 * @return string
 */
class Kucing extends Hewan
{
    public function __construct($name, $color){
        # Opsi satu untuk overriding ke parent class
        # Inalid, dan tidak work pada parent, tetapi valid jika visibility protected (line=19, line=20)
        // $this->name = $name;
        // $this->color = $color;

        # Opsi satu untuk overriding ke parent class dengan __construct
        # Valid, walaupun visibility yang dipakai adalah private pada parent
        parent::__construct($name, $color);

    }
    public function bersuara() : string {
        return $this->getHewan() . " dan bersuara meow..";
    }
}

$hewan = new Kucing("Kucing", "Hitam");
echo $hewan->bersuara();
