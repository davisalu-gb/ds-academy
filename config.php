<?php 

    $db_Host = 'localhost';
    $db_Username = 'root';
    $db_Password = '';
    $db_Name = 'formulario-registro';
    
    $conexao = new mysqli($db_Host,$db_Username,$db_Password,$db_Name);

    // if($conexao->connect_errno)
    //{
    //    echo "erro";
    //}
    //else
    //{
    //    echo "conexão realizada com sucesso";
    //}

?>