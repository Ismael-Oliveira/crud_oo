<?php
    require('./assets/php/contato.class.php');

    $contato = new Contato();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $resp = $contato->deletar($id);
    }

    $contatoVazio = false;

    $resp = $contato->buscarTodos();

    if(count($resp) <= 0){
        $contatoVazio = true;
    }


?>


<h1>Lista de contatos</h1>
<a href="./assets/php/adicionar.php">[Adicionar]</a>
<br><br>
<table border='1' width="500">
        <thead>
            <td>ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>AÇÔES</td>
        </thead>
        <tbody>
            <?php if(!$contatoVazio): ?>
                <?php foreach ($resp as $value):?>
                    <tr>
                        <td><?php echo $value['idcontato']?></td>
                        <td><?php echo $value['nome']?></td>
                        <td><?php echo $value['email']?></td>
                        <td align="center">
                            <a href='./assets/php/editar.php?id=<?php echo $value['idcontato']?>'>[Editar]</a>
                            <a href='./?id=<?php echo $value['idcontato']?>'>[Deletar]</a>    
                        </td>
                        
                    </tr>
              
                <?php endforeach;?>

            <?php else:?>
                <td>O banco não possui nenhum contato</td>
            <?php endif;?>
        </tbody>
</table>        