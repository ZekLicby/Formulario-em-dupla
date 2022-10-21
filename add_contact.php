<?php
// verificando o método


    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('acesso negado');
    }

    
  
    if(($_POST['nome']) == '' || $_POST['senha'] =='' || $_POST['email'] ==''){
        die('a');
    }

    require_once('inc/EasyPDO.php');
    require_once('inc/config.php');

// connect db

    $pdo = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// prevent SQL injection

$parametros = [
    ':nome'  => $_POST['nome'],
    ':senha' => $_POST['senha'],
    ':email' => $_POST['email'],
];

$pdo-> query("INSERT INTO usuarios VALUES(0, :nome, :email, :senha)",$parametros);


echo "formulario enviado";
?>
<div>
    <a href="index.html">back</a>
</div>

