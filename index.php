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
        <div class="content-bug">
            <button class="bug">prov</button>
        </div>

        <div class="header">
            <div class="center flex">
                <h1><a href="./"><img src="./img/logo.jpeg" /></a></h1>
                <ul class="nav">
                    <li> <a href="javascript:;">Home</a> </li>
                    <li> <a href="#sobre" class="sliding-link">Sobre</a> </li>
                    <li> <a href="javascript:;">Soluções</a> </li>
                    <li> <a href="javascript:;">Serviços</a> </li>
                    <li> <a href="javascript:;" data-id="contato">Contato</a> </li>
                    <li> <a href="javascript:;" data-id="manager-acount">Área de cliente</a> </li>
                </ul>
            </div>
        </div>
        
        <section class="banner"> 
            <?php
                $sql = $pdo->prepare("select * FROM tbl_banners");
                $sql->execute();
                //echo 'count'.rowCount();
            if($sql->rowCount() > 0){
                        //echo 'count'.$sql->rowCount();
                 while($info = $sql->fetch()){
            ?>
                    <div class="owl-carousel">                
                            <a href="<?php echo $info['link']; ?>">
                                <img src="img/banners/<?php echo $info['nome'];?>" width="150" alt="">
                            </a>
            <?php
                    }
            }
            ?>
                    </div>
        </section>

        <div class="service center">
            <ul class="list-server">
                <li> 
                    <div class="content-card">
                        <div class="content-card-title">
                        <h2>Serviços</h2>
                        </div>
                        <div class="content-card-main">
                            <img src="img/home/servicos.jpg">
                        <p>Lorem Ipsum é simplesmente uma simulação 
                        de texto da indústria tipográfica e de impressos, 
                        e vem sendo utilizado desde o século XVI, quando 
                        um impressor desconhecido pegou uma bandeja de tipos
                         e os embaralhou para fazer um livro de modelos de tipos. 
                         Lorem Ipsum sobreviveu não só a cinco séculos, como também 
                         ao salto para a editoração eletrônica, permanecendo 
                         essencialmente inalterado.
                        </p>
                        </div>
                        <div class="content-card-footer">
                        
                        </div>
                    </div>    
                </li>

                <li> 
                    <div class="content-card">
                        <div class="content-card-title">
                        <h2>Produtos</h2>
                        </div>
                        <div class="content-card-main">
                        <img src="img/home/produtos.jpg">
                        <p>Ao contrário do que se acredita, 
                        Lorem Ipsum não é simplesmente um 
                        texto randômico. Com mais de 2000 anos, 
                        suas raízes podem ser encontradas em uma
                         obra de literatura latina clássica datada 
                         de 45 AC. Richard McClintock, um professor 
                         de latim do Hampden-Sydney College na Virginia, 
                         pesquisou uma das mais obscuras palavras em latim, 
                         consectetur, oriunda de uma passagem de Lorem Ipsum, 
                         e, procurando por entre citações da palavra na literatura 
                         clássica, descobriu a sua indubitável origem.</p>
                        </div>
                        <div class="content-card-footer">
                        
                        </div>
                    </div>    
                </li>

                <li> 
                    <div class="content-card">
                        <div class="content-card-title">
                        <h2>Honorários</h2>
                        </div>
                        <div class="content-card-main">
                        <img src="img/home/tabela.jpg">
                        <p>Existem muitas variações disponíveis de 
                        passagens de Lorem Ipsum, mas a maioria 
                        sofreu algum tipo de alteração, seja por 
                        inserção de passagens com humor, ou palavras 
                        aleatórias que não parecem nem um pouco 
                        convincentes. Se você pretende usar uma 
                        passagem de Lorem Ipsum, precisa ter certeza 
                        de que não há algo embaraçoso escrito 
                        escondido no meio do texto. Todos os 
                        geradores de Lorem Ipsum na internet 
                        tendem a repetir pedaços predefinidos 
                        conforme necessário.
                        </p>
                        </div>
                        <div class="content-card-footer">
                        
                        </div>
                    </div>    
                </li>
            </ul>
        </div>
        
        <div class="animation container-item">
            <div class="row center">
                <div data-aos="fade-down-right">
                    
                </div>
            </div>
        </div>
        
        <section class="container-item"> 
            <div class="after-element">
                <div class="before-element"></div>
            </div>
            

            <div class="row center">
                <div data-aos="fade-down-right">
                <h2>Quem Somos</h2>
                Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:

“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”

The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.

The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. 
                </div>
            </div>            
        </section>
        
        <section class="animation container-item"  id="sobre" data-aos="zoom-out-down">
            <div class="row center">
                teste2
            </div>
        </section>

        <section class="container-item"> 
            <div class="center">
                teste3
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