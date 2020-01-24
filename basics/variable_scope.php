<?php
/**
 * File ini digunakan untuk mengetahui scope atau ruang lingkup variabel
 * Diharapkan setelah mengetahuinya bisa mempercepeat debugging code
 * Scope variabel : Global, dan local
 * Uncomment code untuk melihat hasil dari kode
 */

 # Membuat variabel


# Global Scope
// $animal = "Dog"; // Global scope
//
// echo $animal; // Hasil = Dog
//
// function getAnimal(){
//  echo $animal; // Akan menampilkan error karena $animal tidak dikenali alias sudah berbeda scope
// }
//
// getAnimal();


# Local Scope
// function sayHi(){
//     $text = "Hi, bro!"; // Defenisikan variabel $text
//     echo $text; // Hasil Hi, bro! ====> Berhasil, karena ada dalam scope yang sama
// }
//
// sayHi();
//
// echo $text; // Akan menghasiklan error karena $text tidak dikenali dna sudah berada di scope yang berbeda

# Menggobalkan variabel
// $animal = "Dog"; // Global scope
//
// function getAnimal(){
//     global $animal; // Menglobalkan variabel agar bisa dikenali dengan menambahkan keyword global diawal variabel
//     echo $animal; // Hasil Dog
// }
//
// getAnimal();

# Cara lain mendaftarkan ke arrat $GLOBALS
// $animal = "Dog"; // Global scope
//
// function getAnimal(){
//     echo $GLOBALS['animal']; // Hasil Dog ==> Menglobalkan variabel agar bisa dikenali dengan menambahkan keyword $GLOBAL['variabel']
// }
//
// getAnimal();
