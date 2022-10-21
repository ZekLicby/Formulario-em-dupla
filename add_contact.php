<?php
// verificando o método


    if($_SERVER['REQUEST_METHOD'] != 'GET'){
        die('acesso negado');
    }

    require_once('inc/EasyPDO.php');
    require_once('inc/config.php');

// connect db

    $pdo = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// prevent SQL injection

$parametros = [
    ':nome'  => $_GET['nome'],
    ':senha' => $_GET['senha'],
    ':email' => $_GET['email'],
];

$pdo-> query("INSERT INTO usuarios VALUES(0, :nome, :email, :senha)",$parametros);


echo "formulario enviado";
?>
<div>
    <a href="index.html">back</a>
</div>

