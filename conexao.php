<?php
// Configurações do banco de dados
$host = "localhost"; // ou "127.0.0.1"
$user = "root";      // usuário padrão do XAMPP
$pass = "";          // senha padrão é vazia
$db   = "aula7-php"; // coloque exatamente o nome que você deu ao banco
$port = 3307;        // LEMBRETE: use 3307 se você mudou a porta no my.ini

// 1. Criando a conexão
$banco = new mysqli($host, $user, $pass, $db, $port);

// 2. Verificando se houve erro
if ($banco->connect_error) {
    die("Falha na conexão: " . $banco->connect_error);
}

echo "Conexão realizada com sucesso!";

// 3. Exemplo de consulta (SELECT) para listar o usuário que você criou
$sql = "SELECT id, usuario, email FROM usuario";
$resultado = $banco->query($sql);

if ($resultado->num_rows > 0) {
    // Mostrando os dados de cada linha
    while($linha = $resultado->fetch_assoc()) {
        echo "<br> ID: " . $linha["id"]. " - Nome: " . $linha["usuario"]. " - Email: " . $linha["email"];
    }
} else {
    echo "<br> Nenhum usuário encontrado.";
}

// Fechar conexão
$banco->close();
?>