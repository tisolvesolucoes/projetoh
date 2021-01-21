
function limpaDiv(){
    document.getElementById('err').innerHTML='';
} 

var functionHashi = {
    lightbox: function(){
        var lightbox = ``;

        if($('body .lightbox').length == 0){ 
            lightbox = `<div class="lightbox"></div>` 
        }

        return lightbox
    },

    login: function(){
        var tmpl = `
            <div class="container-login component">
                <div class="content">
                    <div class="close">
                        <button onclick="functionHashi.close()">x</button>
                    </div>
                        <form action="admin/index.php" onSubmit="limpaDiv();" method="post" name="frmLogin" id="frmLogin" target="_self"> 
                            <div class="form-group">
                                <label>Email: </label>
                                <input type="email" name="email" placeholder="email" placeholder="digite seu e-mail" maxlenght="50" />
                            </div>

                            <div class="form-group">
                                <label>Senha:</label>
                                <input type="password" name="senha" maxlenght="20" />
                            </div>

                            <div class="form-group">
                                <type="submit" class="btn" value="Submit" name="acao" onclick="functionHashi.login_action()">
                            </div> 	
                            <div id="err" style="display:none;"></div>
                        </form> 
                </div>
            </div>
        `;

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
    close: function(){
        $('.lightbox').remove()
        $('.component').remove()
    },
    utils: function(){
        $('.owl-carousel').owlCarousel({ items: 1 });
        
        $('[data-id="maneger-acoount"]').click(function(){
            $('.main').append(
                functionHashi.login(),
                functionHashi.lightbox()
            )
        });
    }
}