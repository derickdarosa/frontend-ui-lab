<?php

namespace Services;

use Models\User;

class AuthService
{
    public function login(string $email, string $senha): array
    {
        $email = strtolower(trim($email));

        $errors = [];

        if (empty($email)) {
            $errors[] = 'O e-mail é obrigatório.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'E-mail inválido.';
        }

        if (empty($senha)){
            $errors[] = 'A senha é obrigatória.';
        }

        if(!empty($errors)){
            return [
                'success' => false,
                'errors' => $errors
            ];
        }
        
        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if(!$user || !password_verify($senha, $user['senha'])) {
            return [
                'success' => false,
                'errors' => ['E-mail ou senha inválidos.']
            ];
        } 

        return [
            'success' => true,
            'user' => $user
        ];
    }
}

?>