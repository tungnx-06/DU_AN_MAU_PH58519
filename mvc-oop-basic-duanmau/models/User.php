<?php

require_once 'commons/env.php';
require_once 'commons/function.php';

class User
{
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();

    }

    public function getByUsername($username)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($username, $password, $role = 'user')
{
    $stmt = $this->conn->prepare("INSERT INTO user (username, password, role) VALUES (?, ?, ?)");
    return $stmt->execute([$username, $password, $role]);
}

}