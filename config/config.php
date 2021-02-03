<?php 
    session_start();
    const host = 'localhost';
    const dbname = 'hashimotolegal';
    const user = 'root';
    const senha = '';

    try {
        $pdo = new PDO('mysql:host='.host.';dbname='.dbname.'', user, senha, [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Vai mostrar erros caso exista.
    }catch (Exception $e) { /*Pegue a exception e coloque na variável $e */
        echo 'Erro ao conectar ao banco de dados';
        echo $e;
    } 

    if(isset($_REQUEST['email'])){
         $email = $_REQUEST['email'];
         $senha = $_REQUEST['senha'];

        $sql = $pdo->prepare("SELECT * FROM tbl_usuario WHERE email = ?");
        $sql->execute([$email]);

        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            if(password_verify($senha, $info['senha'])){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $info['idUsuario'];
                $_SESSION['usuario'] = $info['nomeUsuario'];
                header("Location: index.php");
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
