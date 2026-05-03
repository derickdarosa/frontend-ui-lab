<?php 

namespace Models;

use PDO;
class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = require __DIR__ . '/../../Config/database.php';
    }
    public function findByEmail(string $email): ?array
    {
        $stmt = $this->pdo->prepare("
            SELECT id, nome, email, senha
            FROM usuarios
            WHERE email = :email
            LIMIT 1
        ");

        $stmt->execute([
            'email' => $email
        ]);

        $user = $stmt->fetch();

        return $user ?: null;
    }
}
?>