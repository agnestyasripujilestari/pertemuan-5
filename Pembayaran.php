<?php
abstract class Pembayaran { // [cite: 190]
    protected int $jumlah;
    
    public function __construct(int $jumlah) {
        $this->jumlah = $jumlah; // [cite: 191, 192]
    }
    
    abstract public function proses(): void; // 
}

class TransferBank extends Pembayaran {
    public function proses(): void {
        echo "Transfer sebesar Rp{$this->jumlah} berhasil.\n"; // [cite: 197]
    }
}

class EWallet extends Pembayaran {
    public function proses(): void {
        echo "Pembayaran Rp{$this->jumlah} via E-Wallet berhasil.\n"; // [cite: 201]
    }
}

$transaksi = [
    new TransferBank(250000), 
    new EWallet(100000) // [cite: 205]
];

foreach ($transaksi as $p) {
    $p->proses(); // [cite: 208]
}