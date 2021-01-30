<?php
    include('config/config.php');
    if(isset($_REQUEST['acao'])){
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
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashimoto Legal</title>

    <?php include('./header.php'); ?>
</head>
<body>

    <div class="main">
        <div class="header center">
            <h1><a href="./"><img src="./img/logo.jpeg" /></a></h1>
            <ul class="nav">
                <li> <a href="javascript:;">Home</a> </li>
                <li> <a href="#sobre" class="sliding-link">Sobre</a> </li>
                <li> <a href="javascript:;">Soluções</a> </li>
                <li> <a href="javascript:;">Serviços</a> </li>
                <li> <a href="javascript:;">Contato</a> </li>
                <li> <a href="javascript:;" data-id="maneger-acoount">Área de cliente</a> </li>
            </ul>
        </div>
        
        <section class="banner">
            <div class="owl-carousel">
                <div></div>
            </div>
        </section>

        <div class="service center">
            <ul class="list-server">
                <li> 
                    <div class="content-card">
                        <div class="content-card-title">
                            1
                        </div>
                        <div class="content-card-main">
                            2
                        </div>
                        <div class="content-card-footer">
                            3
                        </div>
                    </div>    
                </li>

                <li> 
                    <div class="content-card">
                        <div class="content-card-title">
                            1
                        </div>
                        <div class="content-card-main">
                            2
                        </div>
                        <div class="content-card-footer">
                            3
                        </div>
                    </div>    
                </li>

                <li> 
                    <div class="content-card">
                        <div class="content-card-title">
                            1
                        </div>
                        <div class="content-card-main">
                            2
                        </div>
                        <div class="content-card-footer">
                            3
                        </div>
                    </div>    
                </li>
            </ul>
        </div>
        
        <div class="animation container-item">
            <div class="row center">
                <div data-aos="fade-down-right">
                    teste
                </div>
            </div>
        </div>
        
        <section class="container-item"> 
            <div class="center">
                teste
            </div> 
        </section>
        
        <section class="animation container-item"  id="sobre" data-aos="zoom-out-down">
            <div class="row center">
                teste
            </div>
        </section>

        <section class="container-item"> 
            <div class="center">
                teste
            </div> 
        </section>

        <footer class="footer">
            <div class="center">
                Footer 
            </div>            
        </footer>
    </div>

    <?php include('./footer.php'); ?>
</body>
</html>