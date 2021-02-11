<?php    
    include('../config/main.php');
    include('../config/config.php');//$_SERVER['SERVER_NAME'] .
    //$urlBanner = str_replace("index.php", "",  $_SERVER["REQUEST_URI"]);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashimoto Legal</title>

    <?php include('./../header.php'); ?>
</head>
<body>

<div class="main">

        <div class="content-bug">
            <button class="bug">prov</button>
        </div>
        <div class="header">
            <div class="center flex">
                <h1><a href="../"><img src="../img/logo.jpeg" /></a></h1>
                <ul class="nav">

                    <li> <a href="javascript:;">Home</a> </li>
                    <li> <a href="javascript:;">Sobre</a> </li>
                    <li> <a href="javascript:;">Soluções</a> </li>
                    <li> <a href="javascript:;">Preços</a> </li>
                    <li> <a href="javascript:;">Contato</a> </li>
        
                </ul>

                <div class="account">
                    <div class="user">                
                        <?php echo $_SESSION['usuario'] ?>                    
                        <div data-id="manager-acount">
                            <a href="?sair">
                                <i class="fas fa-sign-in-alt">
                            </i></a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
        <section class="container-banner">
            <div class="center load-elements">
                <div class="elements">
                    <p>Adicionar imagem</p>
                    <button data-id="banner" class="btn btn-internal">Upload imagem</button>
                    <img src="./../img/undraw_Collection_re_4h7d.svg" class="bg" alt="">
                </div>

                <div class="elements">
                    <div class="right">
                    
                    <?php
                        $sql = $pdo->prepare("select * FROM tbl_banners");
                        $sql->execute();

                        if($sql->rowCount() > 0){
                            while($info = $sql->fetch()){
                                ?>
                                <div class="content-image">
                                    <div class="internal-content">
                                        <a target="_blank" 
                                        href="<?php echo $info['link'];?>">
                                        <img src="../img/banners/<?php echo $info['nome'];?>" width="300" heigth="300" alt="" />
                                        <span><?php echo $info['link']; ?></span>
                                        </a>
                                    </div>

                                    <button class="btn" onclick="
                                    functionHashi.deleteImage_action(<?php echo $info['id_banner']; ?>,'<?php echo $info['nome'];?>')">
                                        x
                                    </button>

                                </div>
                        <?php
                            }
                        }
                    ?>

                    </div>
                </div>                
            </div> 
        </section>
       
        <section class="container-solucao"> 
            <div class="center load-elements">
                <div class="elements">
                    <p>Adicionar item(serviço/produto)</p>
                    <button data-id="item" class="btn btn-internal">Adicionar</button>
                </div> 

                <div class="elements">
                    <div class="right "><!--owl-carousel-->
                        <?php
                            $sql = $pdo->prepare("SELECT * FROM `tbl_solucoes` ORDER BY 4 DESC ");
                            $sql->execute();

                            if($sql->rowCount() > 0){
                                while($info = $sql->fetch()){
                                    ?>
                                        
                                    <div class="internal-content-service">
                                        <h2><?php echo $info['titulo'];?></h2>
                                        <p><?php echo $info['descricao']; ?></p>

                                        <button class="btn">
                                            x
                                        </button>
                                    </div>                                  
                            <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div> 
        </section>

        <footer class="footer">
            <div class="center">
                Footer 
            </div>            
        </footer>
    </div>

    <?php include('./../footer.php'); ?>


</body>
</html>