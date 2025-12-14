<?php
class BaseController {
    public static function route(): void {
        echo "Routing di BaseController\n"; // [cite: 141]
    }
    
    public static function handle(): void {
        static::route(); // late static binding [cite: 143]
    }
}

class UserController extends BaseController {
    public static function route(): void {
        echo "Routing di UserController\n"; // [cite: 147]
    }
}

UserController::handle(); // [cite: 150]