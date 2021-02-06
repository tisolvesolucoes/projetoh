
function limpaDiv(){
    document.getElementById('err').innerHTML='';
} 
var dataImg = new FormData();
var functionHashi = {
    lightbox: function(){
        var lightbox = ``;

        if($('body .lightbox').length == 0){ 
            lightbox = `<div class="lightbox"></div>` 
        }

        return lightbox
    },

    banner: function(){
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

    login: function(){
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

    login_action: function(){

        if(document.frmLogin.email.value==''){
            document.getElementById('err').innerHTML='';
            document.getElementById("err").style.display = "block"; 
            document.getElementById('err').innerHTML='Preencha o campo Email';
            document.frmLogin.senha.focus();
            return false;
        }else if(document.frmLogin.senha.value==''){
            document.getElementById('err').innerHTML='';
            document.getElementById("err").style.display = "block"; 
            document.getElementById('err').innerHTML='Preencha o campo Senha';
            document.frmLogin.senha.focus();
        }else{
            document.frmLogin.submit();
        }

        //window.location.href = '/admin'


    },

    banner_action: function(){
        dataImg.append('acao', 'upload');
        dataImg.append('caminho', $('[data-id="files"]')[0].files[0]);
        dataImg.append('link',  $('#link').val());
        $('.status').append('Carregando...');

        $.ajax({
            url: 'banners/script_banners.php',
            dataType: 'text', 
            cache: false,
            contentType: false,
            processData: false,
            data: dataImg,
            type: 'post',
            success: function(response) {
                console.log(response)
                $('.container-login').remove();
                setTimeout(() => {
                    window.location.reload()
                }, 1000);
            },
            error: function(error){
                console.log(error)
            }
        });
    }, 
    
    deleteImage_action: function(val, image){
        //alert(image)
        dataImg.append('acao', 'deletarImagem');
        dataImg.append('pathImage',  ''+image+'');
        dataImg.append('id',  ''+val+'');

        $('.status').append('Carregando...');

        $.ajax({
            url: 'banners/script_banners.php',
            dataType: 'text', 
            cache: false,
            contentType: false,
            processData: false,
            data: dataImg,
            type: 'post',
            success: function(response) {
                console.log(response)
                $('.container-login').remove();
                setTimeout(() => {
                    window.location.reload()
                }, 1000);
            },
            error: function(error){
                console.log(error)
            }
        });
    },

    close: function(){
        $('.lightbox').remove()
        $('.component').remove()
    }, 
/******************************************************BANNER */   
    readURL: function(input) {
        
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            if ( /\.(jpe?g|png|gif)$/i.test(input.files[0].name) ) {
                reader.onload = function (e) {
                    var img = new Image();
                    img.src = e.target.result;
                    
                    img.onload = function() {
                       
                        if(this.width > 1000 && this.height > 450){                        
                            $('#preview').attr('src', e.target.result);
                        }else{
                            $('[data-id="files"]').val('')
                            alert('largura deve ser + 1000 e altura + 450')
                        }
                       
                    };
                   
                }
    
                reader.readAsDataURL(input.files[0]);
            }else{
                alert('Escolha uma imagem')
            }
        }
    },
/******************************************************BANNER */
    item: function(){
        var tmpl = `
            <div class="container-login component">
                <div class="content">
                    <div class="close">
                        <button onclick="functionHashi.close()">x</button>
                    </div>
                        <form action="admin/index.php" onSubmit="limpaDiv();" method="post" name="frmLogin" id="frmLogin" target="_self"> 
                            <div class="form-group">
                                <label>Nome: </label>
                                <input type="type" placeholder="Nome" />
                            </div>

                            <div class="form-group">
                                <label>Nome: </label>
                                <input type="type" placeholder="Outro nome" />
                            </div>

                            <div class="form-group">
                                <label>Nome: </label>
                                <input type="type" placeholder="Mais um nome" />
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
/******************************************************AÇOES */
    utils: function(){
        $('.owl-carousel').owlCarousel({ items: 1 });
        
        $('[data-id="maneger-acoount"]').click(function(){
            $('.main').append(functionHashi.login(),functionHashi.lightbox())
        });

        $('[data-id="banner"]').click(function(){
            $('.main').append(functionHashi.banner(),functionHashi.lightbox());
        });

        $('[data-id="item"]').click(function(){
            $('.main').append(functionHashi.item(),functionHashi.lightbox());
        });
          
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

        $(".sliding-link").click(function(e) {
            e.preventDefault();
            var aid = $(this).attr("href");
            $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
        });

        $(document).on('click', function(event) {
            if ($(event.target).has('.content').length) {
                $(".lightbox").remove();
                $(".component").remove();
            }
        });

        $('.bug').click(function(){
            if($('.header').hasClass('openheader')){
                $('.header').removeClass('openheader')
            }else{
                $('.header').addClass('openheader')
            }
        })

        $('.header ul li a').click(function(){
            $('.header').addClass('openheader')
        })

    }
}