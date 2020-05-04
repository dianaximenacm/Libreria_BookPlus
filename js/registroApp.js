let frente = document.querySelector('.paginaFrente');
let atras = document.querySelector('.paginaAtras');
let giro = document.querySelector('.contenidoLibro');
let uno = document.querySelectorAll('.libro');
let portada = document.querySelectorAll('#portada');

let contZindex = 2;
let customZindex = 1;

for (i = 0; i < uno.length; i++) {
    uno[i].style.zIndex = customZindex;
    customZindex--;

    uno[i].addEventListener('click', function (e) {

        let tgt = e.target;
        let unoThis = this;

        unoThis.style.zIndex = contZindex;
        contZindex++;

        if (tgt.getAttribute('class') == 'paginaFrente') {
            unoThis.style.zIndex = contZindex;
            contZindex += 50;
            setTimeout(function () {
                unoThis.style.transform = 'rotateY(-180deg)'
            }, 800)
        }

        if (tgt.getAttribute("class") == 'paginaAtras') {
            unoThis.style.zIndex = contZindex;
            contZindex += 50;
            setTimeout(function () {
                unoThis.style.transform = 'rotateY(0deg)'
            }, 800)
        }
        if (tgt.getAttribute('id') == 'portada') {
            giro.classList.remove("trnsf-reset");
            giro.classList.add("trnsf");
        }
        if (tgt.getAttribute('id') == 'trsf') {
            giro.classList.remove("trnsf");
            giro.classList.add("trnsf-reset");
        }
    })
}