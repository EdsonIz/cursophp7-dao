<?php
require_once 'config.php';

$usuario = new Usuario();
$usuario->loadById(6);
echo $usuario;

