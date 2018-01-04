function getDOMImplementation(sUrl, fCallback) {
    var dom;  
    if (window.ActiveXObject) {
        dom = new ActiveXObject("Microsoft.XMLDOM");
        dom.onreadystatechange = function() {
            if(dom.readyState == 4) {
                fCallback(dom);
            }
        };}
    else if (document.implementation && document.implementation.createDocument) {
        dom = document.implementation.createDocument("", "", null);
        dom.onload = function() { 
            fCallback(dom); 
        }
    }   
    else {
        alert("Votre navigateur ne gère pas l'importation de fichiers XML");
        return;
    }   
    dom.load(sUrl);}