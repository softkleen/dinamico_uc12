<?php
    include("conexao.php");//teste passou (var_dump($db););
    $txt_login = $_POST['txt_login'];
    $txt_senha = $_POST['txt_senha'];

    //echo "Usuário: ".$txt_login." -> Senha: ".$txt_senha;  //teste passou!
    $sql = "select * from administrador where login = '$txt_login' and senha = '$txt_senha'";
    $resultado = mysqli_query($db, $sql);
    if(mysqli_num_rows($resultado)>0){
        print "<script type='text/javascript'>location.href='principal.php'</script>";
    }
    else{
        print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'> 
        <script type='text/javascript'>window.alert('Login ou senha não encontrado, tente novamente.')</script> ";   
    }



?>