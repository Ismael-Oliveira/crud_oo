<?php
    require('./contato.class.php');

    $contato = new Contato();
    $nome = "";

    if(isset($_POST['email'])){
        $nome = $_POST['nome'];
        // verifica campo obrigatorio no banco
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            $nome = $_POST['nome'];
            $res = $contato->cadastrar($email, $nome);
            if($res){
                header("Location: ../../index.php");
            }else{
                echo "Erro ao cadastrar contato esse email já existe.";
            }
        }else{
            echo "È necessário preencher o campo de email.";
        }
 
    }
?>
<h2>Adiconar um novo contato</h2>
<form action="#" method="post">
    Nome: <br>
    <input type="text" name="nome" id="nome" placeholder="Nome" size="50" maxlength="50" value="<?php echo $nome?>">
    <br><br>
    Email: <br>
    <input type="email" name="email" id="email" placeholder="E-mail" size="50" maxlength="50">
    <br><br>
    <input type="submit" value="salvar">
</form>