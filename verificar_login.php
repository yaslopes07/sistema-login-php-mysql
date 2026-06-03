<?php
// 1. Conexão 
$host = "localhost";
$usuario_db = "root";
$senha_db = "";
$nome_banco = "aula7-php";
$banco = new mysqli($host, $usuario_db, $senha_db, $nome_banco, 3307);

if ($banco->connect_error) {
    die("Falha na conexão: " . $banco->connect_error);
}

// 2. Pegando os dados vindos do formulário
$user_digitado = $_POST['user_form'];
$senha_digitada = $_POST['password_form'];

// 3. Criando a consulta SQL
$sql = "SELECT * FROM usuario WHERE usuario = '$user_digitado' AND senha = '$senha_digitada'";

// 4. Executando a consulta
$resultado = $banco->query($sql);

// 5. Verificando se encontrou alguém
if ($resultado->num_rows > 0) {
    // Se encontrou 1 ou mais linhas, o login está correto
    echo "<h1>Bem-vindo, $user_digitado!</h1>";
    echo "<p>Login realizado com sucesso consultando o MySQL.</p>";
} else {
    // Se não encontrou nada, os dados estão errados
    echo "<h1>Acesso Negado!</h1>";
    echo "<p>Usuário ou senha inválidos.</p>";
    echo '<a href="login.html">Tentar novamente</a>';
}

$banco->close();
?>