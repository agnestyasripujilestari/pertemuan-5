<?php
// Class Induk
class User {
    protected string $nama; 
    protected string $email; 
    
    public function __construct(string $nama, string $email) {
        $this->nama = $nama;
        $this->email = $email;
    }
    
    public function login(): void {
        echo "{$this->nama} berhasil login.\n";
    }

    public function getEmail(): string {
        return $this->email;
    }
}

// Class Turunan
class Admin extends User {
    // Admin mewarisi $nama, $email, dan method login()
    
    // Method spesifik Admin
    public function hapusUser(string $target): void { 
        echo "{$this->nama} menghapus user $target.\n";
    }
    
    // Method baru yang menggunakan property induk
    public function isAdmin(): void {
        echo "{$this->nama} adalah administrator.\n";
    }
}

// Pengujian
$admin = new Admin("Joko", "joko@example.com");

// Method yang diwarisi dari User
$admin->login(); 

// Method spesifik Admin
$admin->hapusUser("Budi"); 

// Mengakses property yang diwarisi melalui method
echo "Email: " . $admin->getEmail() . "\n"; 
$admin->isAdmin();
?>