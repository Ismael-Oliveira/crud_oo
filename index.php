<?php
    require('./assets/php/contato.class.php');

    $contato = new Contato();

    // testando cadastro
    $resp = $contato->cadastrar("nana@gmail.com");
    if($resp){
        echo 'cadastro realizado com sucesso.';
    }else{
        echo 'Erro ao se cadastrar';
    }
?>