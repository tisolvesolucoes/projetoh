var hostname = window.location.hostname;

var urlBlindado = "https://seal.siteblindado.com.br/v1/domains/" + hostname + "/seal?brand=siteblindado";

var languagesBlindado = {
    pt: {
        title: "",
        context_text: "C&oacute;pia  Proibida por Lei- Site Blindado&reg; &eacute; marca registrada de Site Blindado S.A."
    }
};

function insertSealBlindado(domObj) {
    var imageSource = "https://www.siteblindado.com/images/ssl.png";
    var urlSeal = "//www.siteblindado.com/consumidor/selo-ssl/";

    domObj.style.width = "122px";
    domObj.style.height = "81px";

    domObj.innerHTML = '<a href="' + urlSeal + "?language=" + "pt" + "&hostname=" + hostname + '" ' + 'target="_blank" ' + 'title="' + languagesBlindado["pt"].title + '"> ' +
        '<img src="' + imageSource + '" ' + 'oncontextmenu=alert("' + languagesBlindado["pt"].context_text.replace(/ /g, "&nbsp;") + '") ' + 'style="border-style: none"> ' +
    "</a>"
}

function sealConditionBlindado(response) {
    if (response.status_seal == 1) {
        var sealSelectors = [
            document.getElementById("sslblindado"),
            document.getElementById("sslblindado_02"),
            document.getElementById("sslblindado_03")
        ];

        sealSelectors.forEach(function(domObj) {
            if (domObj !== null) {
                insertSealBlindado(domObj)
            }
        })
    }
}

function xmlGetBlindado() {
    var xmlhttp;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    try {
        xmlhttp.open("GET", urlBlindado, false);

        xmlhttp.send();

        if (xmlhttp.status == 200) {
            var jsonText = xmlhttp.responseText;

            var json = JSON.parse(jsonText);

            sealConditionBlindado(json)
        }
    } catch (err) {
        console.error(err)
    }
}

try {
    fetch(urlBlindado, {
        method: "GET"
    }).then(function(data) {
        data.json().then(function(response) {
            sealConditionBlindado(response)
        })
    })
} catch (err) {
    xmlGetBlindado()
}
