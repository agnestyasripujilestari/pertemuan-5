<?php
// Level 1: Induk Utama
class Kendaraan {
    public function __construct(public string $merek) {}
    public function jalan(): void {
        echo "Kendaraan {$this->merek} sedang berjalan.\n"; 
    }
}

// Level 2: Turunan dari Kendaraan
class Mobil extends Kendaraan {
    public function angkutPenumpang(): void {
        echo "Mobil {$this->merek} mengangkut penumpang.\n";
    }
}

// Level 3: Turunan dari Mobil
class MobilSport extends Mobil {
    // MobilSport mewarisi dari Mobil, dan juga dari Kendaraan.
    
    public function ngebut(): void {
        echo "Mobil Sport {$this->merek} sedang ngebut dengan cepat!\n"; 
    }
}

// Pengujian
$sport = new MobilSport("Ferrari");

// Memanggil method dari Kendaraan (Level 1)
$sport->jalan(); 

// Memanggil method dari Mobil (Level 2)
$sport->angkutPenumpang(); 

// Memanggil method dari MobilSport (Level 3)
$sport->ngebut(); 
?>