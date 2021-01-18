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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashimoto</title>

    <link rel="stylesheet" href="./css/reset.css" type="text/css" />
    <link rel="stylesheet" href="./css/style.css" type="text/css" />

    <link rel="stylesheet" href="./css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
</head>
<body>

    <div class="main">
        <div class="header center">
            <h1><a href="javascript:;">Hashimoto</a></h1>
            <ul class="nav">
                <li> <a href="javascript:;">Home</a> </li>
                <li> <a href="javascript:;">Sobre</a> </li>
                <li> <a href="javascript:;">Soluções</a> </li>
                <li> <a href="javascript:;">Preços</a> </li>
                <li> <a href="javascript:;">Contato</a> </li>
                <li> <a href="javascript:;" data-id="maneger-acoount">Área de cliente</a> </li>
            </ul>
        </div>
        
        <section class="banner">
            <div class="owl-carousel">
                <img src="https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials-hero.jpg" />
                <img src="https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials-hero.jpg" />
                <img src="https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials-hero.jpg" />
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
        
        <section class="container-item"> <div class="center">0</div> </section>
        <section class="container-item"> <div class="center">0</div> </section>
        <section class="container-item"> <div class="center">0</div> </section>

        <footer class="footer">
            <div class="center">
                Footer 
            </div>            
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/owl.carousel.min.js"></script>
    <script src="./js/hashimoto.js"></script>

    <script>
        functionHashi.utils()
    </script>
</body>
</html>