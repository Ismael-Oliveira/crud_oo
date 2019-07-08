<?php
    require('./contato.class.php');

    $contato = new Contato();
    $nome = "";
    $email = "";
    $id="";

    if( isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];

        $res = $contato->buscarUm($id);
    
        if(count($res) > 0){
            $nome = $res['nome'];
            $email = $res['email'];
        }else{
            echo "Esse contato não existe.";
        }

    }else{
        echo "Nenhum id foi passado.";
    }

    if(isset($_POST['nome'])){
        
        $nome = $_POST['nome'];

        $res = $contato->atualizar($id, $nome);
        if($res){
            header("Location: ../../index.php");
        }else{
            echo "Nenhum contato foi editado.";
            echo '<a href="../../index.php">[Retornar sem editar]</a>';
        }        
    }

?>
<h2>Editar contato</h2>
<form action="#" method="post">
    Nome: <br>
    <input type="text" name="nome" id="nome" placeholder="Nome" size="50" maxlength="50" value="<?php echo $nome?>">
    <br><br>
    Email: <br>
    <input type="email" name="email" id="email" placeholder="E-mail" size="50" maxlength="50" value="<?php echo $email?>" disabled>
    <br><br>
    <input type="submit" value="salvar">
</form>