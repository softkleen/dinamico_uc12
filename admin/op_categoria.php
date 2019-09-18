<?php
 include "conexao.php";

 $txt_categoria = $_POST['txt_categoria'];
 $txt_ativo = $_POST['txt_ativo'];

 $sql = "INSERT INTO categoria (categoria, cat_ativo) VALUES ('$txt_categoria','$txt_ativo')";
 msqli_query($db, $sql) or die("Não foi possível inserir dados!");
?>