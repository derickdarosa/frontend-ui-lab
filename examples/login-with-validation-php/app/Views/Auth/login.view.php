<?php

$erros = $_SESSION['erros'] ?? [];
unset($_SESSION['erros']);

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login 01</title>
    <link rel="stylesheet" href="<?= asset('styles/pages/login.css') ?>?v=<?= time() ?>">
</head>
<body>
    <header>
        <nav class="nav">
            <a href="/loja">Voltar para a loja</a>
            <div class="nav-right">
                <span>Não é membro?</span>
                <a href="/cadastro" class="btn-outline">Entrar</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="login-box">
            <div class="logo-tech"></div>

            <?php foreach ($erros as $erro): ?>
                <p><?php htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endforeach; ?>

            <form action="" method="post">
                <div class="field">
                    <input type="email" name="email" id="email" placeholder=" " required>
                    <label for="email">SEU EMAIL</label>
                </div>
                <div class="field">
                    <input type="password" name="senha" id="senha" placeholder=" " required>
                    <label for="senha">SUA SENHA</label>
                </div>
            
                <button type="submit" value="Login">Login</button>
            </form>
        </section>
    </main>
</body>
</html>