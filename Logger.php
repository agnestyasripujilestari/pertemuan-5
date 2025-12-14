<?php
interface Logger { // [cite: 226]
    public function log(string $pesan): void; // 
}

class FileLogger implements Logger { // [cite: 229]
    public function log(string $pesan): void {
        echo "Menulis ke file: $pesan\n"; // [cite: 230]
    }
}

class ConsoleLogger implements Logger { // [cite: 233]
    public function log(string $pesan): void {
        echo "Menampilkan ke konsol: $pesan\n"; // [cite: 234]
    }
}

$lg = new ConsoleLogger(); // [cite: 238]
$lg->log("Test log"); // [cite: 239]