<?php 
    session_start();
    const host   = 'localhost';
    const dbname = 'hashimotolegal';
    const user   = 'root';
    const senha  = '';

    //WEB
    //const host = 'mysql03-farm36.kinghost.net';
    //const host   = 'mysql.hashimotolegal.com.br';
    //const dbname = 'hashimotolegal';
    //const user   = 'hashimotolegal';
    //const senha  = 'mkultrA954';

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

        $sql = $pdo->prepare("SELECT * FROM tbl_usuario WHERE email = ? AND senha = ?");
        $sql->execute([$email, $senha]);

        if($sql->rowCount() == 1){ 
            $info = $sql->fetch();
                $_SESSION['login'] = true;
                $_SESSION['id'] = $info['idUsuario'];
                $_SESSION['usuario'] = $info['nomeUsuario'];
                
                header("Location: index.php");
                die();
            //}else{
                
                //Erro
                //echo "<script>alert('Usuário ou senha incorretos!')</script>";
                //echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!</p></div>';
            //}
        }//else{

            //Erro
            //echo "<script>alert('Usuário não encontrado.')</script>";
            //echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
       // }
    }
?>
