
function limpaDiv() {
    document.getElementById('err').innerHTML = '';
}

var dataImg = new FormData();

var functionHashi = {
    lightbox: function () {
        var lightbox = ``;

        if ($('body .lightbox').length == 0) {
            lightbox = `<div class="lightbox"></div>`
        }

        return lightbox
    },


    /********************* INICIO ESTRUTURA BANNER ********************/
    banner: function () {
        var tmpl = `
            <div class="container-login component">
                <div class="content">
                    <div class="close">
                        <button onclick="functionHashi.close()">x</button>
                    </div>

                        <form 
                        onSubmit="return false" 
                        action="banners/script_banners.php?tipo=cadastrar"
                        method="post" 
                        name="frmBanner" 
                        enctype="multipart/form-data" 
                        id="frmBanner" 
                        target="_self"> 
                            <div class="form-group">
                                <label>Url:</label>
                                <input type="text" name="link" id="link" />
                                <label>Imagem: </label>
                                <input type="file" data-id="files" name="file" id="file" onchange="functionHashi.readURL(this)" />
                                <input type="hidden" data-id="acao" name="acao" id="acao" value="upload" />
                            
                            </div>

                            <img src="" class="preview" id="preview" />

                            <div class="form-group">   
                                <div class="status"></div>                             
                                <button type="submit" onclick="functionHashi.banner_action()" class="btn" value="Submit" name="acao">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    Envia Banner
                                </button>
                            </div> 

                            <div id="err" style="display:none;"></div>
                        </form> 
                        
                </div>
            </div>`;

        return tmpl
    },
   /********************* INICIO ESTRUTURA BANNER ********************/
    banner_action: function () {

        dataImg.append('caminho', $('[data-id="files"]')[0].files[0]);
        dataImg.append('link', $('#link').val());
        dataImg.append('acao', $('#acao').val());
        $('.status').append('Carregando...');

        $.ajax({
            url: 'banners/script_banners.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: dataImg,
            type: 'post',
            success: function (response) {
                console.log(response)
                $('.container-login').remove();
                setTimeout(() => { 
                   window.location.reload()
                }, 1000);
            },
            error: function (error) {
                console.log(error)
            }
        });
    },
   /********************* FIM CADASTRO BANNER ********************/
   /********************* INICIO DELETE BANNER ********************/
    deleteImage_action: function (val, image) {
        //alert(image)
        dataImg.append('acao', 'deletarImagem');
        dataImg.append('pathImage', '' + image + '');
        dataImg.append('id', '' + val + '');

        $('.status').append('Carregando...');

        $.ajax({
            url: 'banners/script_banners.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: dataImg,
            type: 'post',
            success: function (response) {
                console.log(response)
                $('.container-login').remove();
                setTimeout(() => {
                    window.location.reload()
                }, 1000);
            },
            error: function (error) {
                console.log(error)
            }
        });
    },
    readURL: function (input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            if (/\.(jpe?g|png|gif)$/i.test(input.files[0].name)) {
                reader.onload = function (e) {
                    var img = new Image();
                    img.src = e.target.result;

                    img.onload = function () {

                        if (this.width > 1000 && this.height > 450) {
                            $('#preview').attr('src', e.target.result);
                        } else {
                            $('[data-id="files"]').val('')
                            alert('largura deve ser + 1000 e altura + 450')
                        }

                    };

                }

                reader.readAsDataURL(input.files[0]);
            } else {
                alert('Escolha uma imagem')
            }
        }
    },

    /********************* FIM ESTRUTURA BANNER ********************/



    /********************* INICIO ESTRUTURA LOGIN ********************/

    login_action: function () {

        if (document.frmLogin.email.value == '') {
            document.getElementById('err').innerHTML = '';
            document.getElementById("err").style.display = "block";
            document.getElementById('err').innerHTML = 'Preencha o campo Email';
            document.frmLogin.senha.focus();
            return false;
        } else if (document.frmLogin.senha.value == '') {
            document.getElementById('err').innerHTML = '';
            document.getElementById("err").style.display = "block";
            document.getElementById('err').innerHTML = 'Preencha o campo Senha';
            document.frmLogin.senha.focus();
        } else {
            document.frmLogin.submit();
        }

        //window.location.href = '/admin'

    },


    login: function () {
        var tmpl = `
            <div class="container-login component">
                <div class="content">
                    <div class="close">
                        <button onclick="functionHashi.close()">x</button>
                    </div>
                        <form action="admin/index.php" onsubmit="return false" onSubmit="limpaDiv();" method="post" name="frmLogin" id="frmLogin" target="_self"> 
                            <div class="form-group">
                                <label>Email: </label>
                                <input type="email" name="email" placeholder="email" placeholder="digite seu e-mail" maxlenght="50" />
                            </div>

                            <div class="form-group">
                                <label>Senha:</label>
                                <input type="password" name="senha" maxlenght="20" />
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn" value="Submit" name="acao" onclick="functionHashi.login_action()">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    &nbsp; Envia
                                </button>
                            </div> 	
                            <div id="err" style="display:none;"></div>
                        </form> 
                </div>
            </div>`;

        return tmpl
    },



    /********************* INICIO ESTRUTURA SOLUCOES ********************/

    service_action: function () {
        dataImg.append('acao', 'cadastrarSolucao');
        dataImg.append('titulo', $('#titulo').val());
        dataImg.append('descricao', $('#descricao').val());
        dataImg.append('tipoSolucao', $('#tipoSolucao').val());
    
        
        $('.status').append('Carregando...');

        $.ajax({
            url: 'script.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: dataImg,
            type: 'post',
            success: function (response) {
                console.log(response)
                $('.container-login').remove();
                setTimeout(() => {
                    window.location.reload()
                }, 1000);
            },
            error: function (error) {
                console.log(error)
            }
        });
    },

    item: function () {
        var tmpl = `
            <div class="container-login component">
                <div class="content">
                    <div class="close">
                        <button onclick="functionHashi.close()">x</button>
                    </div>
                        <form 
                        onSubmit="return false" 
                        action="script.php?tipo=cadastrarSolucao"
                        method="post" 
                        name="frmSolucao"
                        target="_self">  
                        
                            <div class="form-group">
                            <label for="cars">Tipo:</label>
                                <select id="tipoSolucao" name="tipoSolucao">
                                <option value="">Selecione</option>
                                <option value="0">Serviço</option>
                                <option value="1">Produto</option>
                                </select>                   
                            </div> 

                            <div class="form-group">
                                <label>Titulo: </label>
                                <input type="type" id="titulo" placeholder="Outro nome" />
                            </div>

                            <div class="form-group">
                                <label>Texto: </label>
                                <textarea id="descricao"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn" value="Submit" name="acao" onclick="functionHashi.service_action()">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    &nbsp; Enviar
                                </button>
                             </div> 

                            <div id="err" style="display:none;"></div>
                        </form> 
                </div>
            </div>`;

        return tmpl
    },

    /******************************************************AÇOES */

    close: function () {
        $('.lightbox').remove()
        $('.component').remove()
    },

    utils: function () {
        $('.owl-carousel').owlCarousel({ items: 1 });

        $('[data-id="manager-acount"]').click(function () {
            $('.main').append(functionHashi.login(), functionHashi.lightbox())
        });

        $('[data-id="banner"]').click(function () {
            $('.main').append(functionHashi.banner(), functionHashi.lightbox());
        });

        $('[data-id="item"]').click(function () {
            $('.main').append(functionHashi.item(), functionHashi.lightbox());
        });

        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

        $(".sliding-link").click(function (e) {
            e.preventDefault();
            var aid = $(this).attr("href");
            $('html,body').animate({ scrollTop: $(aid).offset().top }, 'slow');
        });

        $(document).on('click', function (event) {
            if ($(event.target).has('.content').length) {
                $(".lightbox").remove();
                $(".component").remove();
            }
        });

        $('.bug').click(function () {
            if ($('.header').hasClass('openheader')) {
                $('.header').removeClass('openheader')
            } else {
                $('.header').addClass('openheader')
            }
        });

        $('.header ul li a').click(function () {
            $('.header').addClass('openheader')
        });
        /******************************************************SCROLL */
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 122) {
                $('.header').addClass('fixed');
            } else {
                $('.header').removeClass('fixed');
            }
        });

        if ($(window).scrollTop() > 122) {
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }
        /******************************************************SCROLL */
    }
}