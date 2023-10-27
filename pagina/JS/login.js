function ValidarCorreo() {
    let correo = document.getElementById('correo').value;
    let corre = document.getElementById('corre');
    let expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    let esValido = expReg.test(correo);

    let parrafo = corre.querySelector('.esta');

    if (!esValido) {
        if (!parrafo) {
            parrafo = document.createElement('p');
            parrafo.style.color = 'red';
            parrafo.style.paddingBottom = '5%';
            parrafo.innerHTML = '¡Ingrese un correo válido!';
            parrafo.className = 'esta';
            corre.appendChild(parrafo);
        }
    } else {
        
           
        window.location.href ="../html/index.html";
        
    }
}
