<?php
    include('config/config.php');
    if(isset($_REQUEST['acao'])){
        $email = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];

        $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
        $sql->execute([$email]);

        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            if(password_verify($senha, $info['senha'])){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $info['idusuario'];
                $_SESSION['usuario'] = $info['nomeUsuario'];
                header("Location: admin.php");
                die();
            }else{
                //Erro
                echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!</p></div>';
            }
        }else{
            //Erro
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
        }
    }
?>
<form method="post">
    <input type="text" name="email" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="Entrar" name="acao">
</form>