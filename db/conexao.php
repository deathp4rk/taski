<?php
$servidor
$usuario
$senha
$banco
mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
    exit();
}
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'
$result = mysqli_query($conexao, $query);
if (mysqli_num_rows($result) > 0) {
    // Login bem-sucedido
    echo "Login bem-sucedido!";
} else {
    // Login falhou
    echo "Nome de usuário ou senha incorretos.";
}