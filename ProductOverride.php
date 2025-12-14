<?php
class Product {
    public function __construct(public string $name) {}
    
    public function getCategory(): string { 
        return "Kategori Dasar"; 
    }
    
    public function getDetails(): string {
        return "Detail Produk: {$this->name}";
    }
}

class Smartphone extends Product {
    public function __construct(string $name, public string $chipset) {
        // Panggil constructor induk untuk inisialisasi property yang diwarisi ($name)
        parent::__construct($name); 
    }
    
    // Overriding Method: Mengganti total implementasi induk
    public function getCategory(): string { 
        return "Smartphone"; 
    }
    
    // Overriding Method: Memanggil implementasi induk lalu menambahkannya
    public function getDetails(): string {
        // Mengakses method induk menggunakan parent::
        $indukDetail = parent::getDetails(); 
        return $indukDetail . ", Chipset: {$this->chipset}"; 
    }
}

// Pengujian
$hp = new Smartphone("Xiaomi 14", "Snapdragon 8 Gen 3");

echo $hp->getCategory() . "\n"; 
echo $hp->getDetails() . "\n"; 
?>