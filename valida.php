<?php
// valida.php - Processa o login e inicia a sessão

session_start();

$usuario_correto = 'admin';
$senha_correta = '12345';

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($usuario === $usuario_correto && $senha === $senha_correta) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit;
} else {
    echo "
    <!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <title>Erro</title>
        <link rel='stylesheet' href='css/estilo.css'>
    </head>
    <body>
        <div class='container error'>
            <h2>❌ Login inválido!</h2>
            <p>Usuário ou senha incorretos.</p>
            <a href='login.html'>Tentar novamente</a>
        </div>
    </body>
    </html>";
}
?>