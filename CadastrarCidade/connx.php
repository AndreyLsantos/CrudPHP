<?php
try{
    //Conectando ao banco de dados via PDO
    $sql =  new PDO ('mysql:host=localhost;dbname=dbCidades', 'root', '');
    if(!$sql){
        return false;
    }
}catch( PDOException $Exception ) {
    // Caso de algum erro, imprima a mensagem.
    echo ($Exception->getMessage());
}
