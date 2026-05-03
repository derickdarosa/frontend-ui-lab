<?php 
namespace Controllers;

use Services\AuthService;
class AuthController
{
    public function showLogin(): void
    {
        require __DIR__ . '/../Views/Auth/login.view.php';
    }

    public function login(): void
    {
        $email = $_POST['email'] ?? "";
        $senha = $_POST['senha'] ?? "";

        $authService = new AuthService();
        $resultado = $authService->login($email, $senha);

        if($resultado['success']) {
            $_SESSION['usuario_id'] = $resultado['user']['id'];
            $_SESSION['usuario_nome'] = $resultado['user']['nome'];

            header('Location: dashboard.php');
            exit;
        }

        $_SESSION['erros'] = $resultado['errors'];

        header('Location: index.php');
        exit;
    }
}
?>