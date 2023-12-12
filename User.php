<!-- User.php -->

<?php

class User {
    private $userId;
    private $username;

    public function __construct($userId, $username) {
        $this->userId = $userId;
        $this->username = $username;
    }

    public function displayInfo() {
        echo "User ID: $this->userId\n";
        echo "Username: $this->username\n";
    }
}
