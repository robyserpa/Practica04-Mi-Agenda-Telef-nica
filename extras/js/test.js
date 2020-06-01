//formulario
function validarCamposObligatorios() {
    var bandera = true 
    
    for(var i = 0; i < document.forms[0].elements.length; i++){
        var elemento = document.forms[0].elements[i];
        
        if(elemento.value == '' && elemento.type == 'text' ){
            elemento.style.border = '1px red solid';
            bandera = false;
        }
        if(elemento.value == '' && elemento.type == 'email' ){
            elemento.style.border = '1px red solid';
            bandera = false;
        }
        if(elemento.value == '' && elemento.type == 'password' ){
            elemento.style.border = '1px red solid';
            bandera = false;
        }
    } 
    
    if(!bandera){ 
        alert('Error: revisar los comentarios');
        document.getElementById('errorDatos').innerHTML 
        = 'Revise que todos los datos esten correctos';
        elemento.className = 'error'; 
    }
    return bandera 
}

function validarCedula(elemento) {
    if(elemento.value.length > 0 ){ 
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
        console.log(miAscii) 
        if(miAscii >= 48 && miAscii <= 57){ 
            var cad = document.getElementById("cedula").value.trim();
            var total = 0;
            var longitud = cad.length;
            var longcheck = longitud - 1;
            
            if(elemento.value.length == 10){
                for(i = 0; i < longcheck; i++){
                    if (i%2 === 0) {
                    var aux = cad.charAt(i) * 2;
                    if (aux > 9) aux -= 9;
                    total += aux;
                    } else {
                    total += parseInt(cad.charAt(i));
                    }
                }

                total = total % 10 ? 10 - total % 10 : 0;

                if (cad.charAt(longitud-1) == total) {
                    elemento.style.border = '1px #00ff00 solid';
                    return true;
                }else{
                    elemento.style.border = '2px red solid';
                    return false;
                }
            }else {
                elemento.style.border = '2px red solid';
                return false;
            }
        }else { 
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            elemento.style.border = '2px red solid'; 
            return false;
        } 
    }else{ 
        elemento.style.border = '2px red solid';
        return false;
    } 
}

function validarLetras(elemento) { 
    if(elemento.value.length > 0){ 
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
        // console.log(miAscii);
        if(miAscii >= 65 && miAscii <= 90 || miAscii >= 97 && miAscii <= 122 || miAscii == 32){ 
            var espacio = 0;
            var mayu = 0;
            var min = 0;
            var cad = elemento.value;
            console.log(cad)
            if(cad.charAt(0) == " ") espacio=2;
            if(cad.charCodeAt(0) >= 65 && cad.charCodeAt(0) <= 90) mayu++;
            if(cad.charCodeAt(1) >= 97 && cad.charCodeAt(1) <= 122) min++;
            for (i=0; i < cad.length; i++){                
                if(cad.charAt(i) == " "){
                    espacio++;
                    if(cad.charCodeAt(i+1) >= 65 && cad.charCodeAt(i+1) <= 90) mayu++;
                    if(cad.charCodeAt(i+2) >= 97 && cad.charCodeAt(i+2) <= 122) min++;
                } 
            }
            if( mayu == 2 && espacio == 1 && min > 1) {
                elemento.style.border = '1px #00ff00 solid';
                return true; 
            }else {
                elemento.style.border = '2px red solid'; 
                return false;
            }
        }else { 
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            elemento.style.border = '2px red solid'; 
            return false;
        } 
    }else{ 
        elemento.style.border = '2px red solid';
        return false;
    } 
}

function validarTelefono(elemento){ 
    if(elemento.value.length > 0){ 
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
        var tel = elemento.value;
        if(miAscii >= 48 && miAscii <= 57){ 
            if( elemento.value.length == 10 ) {
                elemento.style.border = '1px #00ff00 solid';
                return true;
            }else {
                elemento.style.border = '2px red solid'; 
                return false;
            }
        }else{
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            elemento.style.border = '2px red solid'; 
            return false;
        }
    }else{
        elemento.style.border = '2px red solid'; 
        return false;
    }
}


function validarPasword(elemento) { 
    if(elemento.value.length > 7){ 
        var especial = 0;
        var mayu = 0;
        var min = 0;
        var cad = elemento.value;
        console.log(cad)
        for (i=0; i < cad.length; i++){
            if(cad.charCodeAt(i) >= 65 && cad.charCodeAt(i) <= 90){
                mayu++;
            }else if(cad.charCodeAt(i) >= 97 && cad.charCodeAt(i) <= 122) {
                min++;
            }else{
                especial++;
            }
        }
        if( mayu >= 1 && especial >= 1 && min >= 1) {
            elemento.style.border = '1px #00ff00 solid';
            return true; 
        }else {
            elemento.style.border = '2px red solid'; 
            return false;
        }
    }else{ 
        elemento.style.border = '2px red solid';
        return false;
    } 
}