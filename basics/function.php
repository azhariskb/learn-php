<?php
/**
 * File ini digunakan untuk mengetahui cara menulis function
 * Diharapkan setelah mengetahuinya bisa mempercepeat debugging code
 * Biasakan menulis parameter sertakan tipedata dan tipe return
 * Uncomment code untuk melihat hasil dari kode
 */

# Contoh function
function sayHi(string $nama) : string {
    return "Hi, {$nama}! Apa kabar?";
}

echo sayHi("Sulaiman");
