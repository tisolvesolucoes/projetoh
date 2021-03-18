<?php session_start();?>
<!DOCTYPE html>
<html class="no-touch" prefix="og: http://ogp.me/ns#" lang="pt-BR">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Hashimoto Legal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <?php
    $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $path;
    
    if (strpos($url, "admin")!==false){
        $path = './../';
    }
    else {
        $path = './';
    }
?>

    <link rel="stylesheet" href="<?php echo $path; ?>css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $path; ?>css/style.css" type="text/css" />


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="subTop row">

                <div class="subheaderCellLeft col-xs-12 col-md-6">
                    <div class="text-value-fone-img col-md-2">
                        <a href="https://api.whatsapp.com/send?phone=5511992026569&text=BemVindoHashimotoLegal!!"
                            target="_blank">
                            <img src="<?php echo $path; ?>/img/watsapp.png">
                        </a>
                    </div>
                    <span class="text-value-fone col-md-10">
                        <a href="tel:+55 11 99202-6569">11 99202 6569</a>
                    </span>
                </div>

                <div class="text-value-email col-xs-12 col-md-6">
                    <i class="fa fa-envelope"></i>
                    <a class="text-value-email" href="mailto:atendimento@hashimotolegal.com.br">
                        atendimento@hashimotolegal.com.br
                    </a>
                       
                </div>
             
                    <?php
                    if($path == './../'){
                    ?>
                        <div class="arrumaDivNome">
                            Bem vindo: <?php echo $_SESSION['usuario'] ?>
                        </div>
                    <?php  
                    }
                    ?>

            </div>

              
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <h1>
                    <a class="navbar-brand" href="#myPage">
                        <img src="<?php echo $path; ?>/img/logo.jpeg" />
                    </a>
                    <span class="spanTexteira">Hashimoto Legal</span>
                </h1>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#myPage">Principal</a></li>
                    <li><a href="#quemSomos">Quem Somos</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li>
            <?php
            if($path == './'){
            
            ?>
                        <a href="javascript:;" id="myBtn">Área restríta</a>
                        <?php    
            }
            else{
            ?>
                        <a href="?sair">Sair</a>
                        <?php
            }
            ?>
                    </li>
                </ul>
            </div>

        </div>
    </nav>