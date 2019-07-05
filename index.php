<?php
    require('./assets/php/contato.class.php');

    $contato = new Contato();

    // testando cadastro
    // $resp = $contato->cadastrar("nana@gmail.com");
    // if($resp){
    //     echo 'cadastro realizado com sucesso.';
    // }else{
    //     echo 'Erro ao se cadastrar';
    // }

    // testando buscar um
    // $resp = $contato->buscarUm("anja@gmail.com");
    // if($resp){
    //     print_r($resp);
    //     echo "<br>";
    //     echo 'Id: '.$resp['idcontato'].' Nome: '.$resp['nome'].' Email: '.$resp['email'];
    // }else{
    //     echo 'Não encontrou nenhum contato';
    // }

    // testando buscar todos
    $resp = $contato->buscarTodos();
    if($resp){
        echo "<pre>";
        print_r($resp);
    }else{
        echo 'Não encontrou nenhum contato';
    }
?>