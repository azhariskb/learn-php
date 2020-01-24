<?php
/**
 * Abstract class digunakan untuk hal hal yang sudah jelas kegunaanya
 * 'Memaksakan' child class untuk melakukan task (method) dari si abstract class
 * Tidak bisa diinstansiasi
 * Semua abstract method pada acstract class harus di deklarasikan ulang oleh class turunan
 * Argumen untuk method juga harus persis seperti abstract class
 * Tetapi, class turunan bisa saja punya argumennya sendiri
 * Visibility harus seperti abstract class
 */

 abstract class Job
 {
     protected $location;
     abstract public function getName();
     abstract public function getSalary();
     abstract public function getLocation();

     # abstract bisa mempunya fungsi biasa dan tidak harus dideklarasikan ulang seperti abstract function
     public function show() : string {
         return "{$this->getName()} bergaji Rp. {$this->getSalary()} di daerah {$this->getLocation()}";
     }
 }

class Guru extends Job
{
    private $name = "Guru";
    private $salary = 10000000;
    protected $location = "Padang";

    # cobalah untuk meng-komentari baris fungsi getName() dan maka akan error
    public function getName(){ // Buat jadi komentar
        return $this->name; // Buat jadi komentar
    } // Buat jadi komentar

    public function getSalary(){
        return $this->salary;
    }

    public function getLocation(){
        return $this->location;
    }

}


// $merry = new Job(); // Invalid, karena abstract tidak bisa di instansiasi

$husein = new Guru(); // Valid
echo $husein->show(); // Hasil "Guru bergaji Rp. 10000000 di daerah Padang"
