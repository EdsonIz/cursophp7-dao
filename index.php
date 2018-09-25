<?php
require_once 'config.php';

//carrega apenas um usuário
//$usuario = new Usuario();
//$usuario->loadById(6);
//echo $usuario;

//carrega uma lista de usuários
$usuarios = Usuario::getList();
foreach ($usuarios as $row) {
    foreach ($row as $key => $value) {
        echo $key." = ".$value."<br>";
    }
    echo "======================================<br>";
}

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("o");
//echo json_encode($search);

//carrega um usuário usando login e senha
$usuario = new Usuario();
$usuario->login("Ambrósio", "dasffdasfa");
echo $usuario;

