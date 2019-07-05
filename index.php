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
    // $resp = $contato->buscarTodos();
    // if($resp){
    //     echo "<pre>";
    //     print_r($resp);
    // }else{
    //     echo 'Não encontrou nenhum contato';
    // }

    // testando atualizar
    // $resp = $contato->atualizar("nana@gmail.com", 'nana');
    // if($resp){
    //     echo "Atualizado com sucesso";
    // }else{
    //     echo 'Não encontrou nenhum contato';
    // }

    // testando DELETAR
    $resp = $contato->deletar("teste@gmail.com");
    if($resp){
        echo "Deletado com sucesso";
    }else{
        echo 'Não encontrou nenhum contato para deletar';
    }
?>