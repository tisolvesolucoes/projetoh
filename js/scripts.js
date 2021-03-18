

function limpaDiv() {
    //document.getElementById('err').innerHTML = '';
    document.getElementById("err").style.display = "none";
}



var dataImg = new FormData();

var functionHashimoto = {

/********************* INICIO ESTRUTURA LOGIN ********************/

login_action: function() {

    if (document.frmLogin.email.value == '') {
        alert("Preencha o campo Email!");
        document.getElementById('err').innerHTML = '';
        document.getElementById("err").style.display = "block";
        document.getElementById('err').innerHTML = 'Preencha o campo Email';
        document.frmLogin.email.focus();
        return false;
    } else if (document.frmLogin.senha.value == '') {
        alert("Preencha o campo Senha!");
        document.getElementById('err').innerHTML = '';
        document.getElementById("err").style.display = "block";
        document.getElementById('err').innerHTML = 'Preencha o campo Senha';
        document.frmLogin.senha.focus();
    } else {
        document.frmLogin.submit();
    }
    //window.location.href = '/admin'
},




}