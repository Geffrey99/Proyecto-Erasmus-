//###############################################################################################
//########____________FOTO______________________________________
//##############################################################################################
window.addEventListener("load", function () {
    const player = document.getElementById('player');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    const captureButton = document.getElementById('capture');
    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.querySelector('.close');
    const contenedor = document.getElementById('contenedor');
    const recuadro = document.getElementById('recuadro');
    const capturedImagesContainer = document.getElementById('capturedImagesContainer');

    let stream; //-----------Variable para almacenar el stream de la cámara

    const constraints = {
        video: true,
    };

    openModalButton.addEventListener('click', function () {
        modal.style.display = 'block';
        // Inicia la cámara cuando se abre el modaaal................................
        navigator.mediaDevices.getUserMedia(constraints).then((s) => {
            stream = s;
            player.srcObject = s;
        });
    });

    closeModalButton.addEventListener('click', function () {
        // y ahora se detiene la camara................
        if (stream) {
            stream.getTracks().forEach((track) => {
                track.stop();
            });
        }
        modal.style.display = 'none';
    });

    captureButton.addEventListener('click', () => {
        // dibuja el fotograma del vídeo en el canvas....................
        context.drawImage(player, 0, 0, canvas.width, canvas.height);

        // Esto crea una nueva instancia de Recuadro.......................
        var recuadroObj = new Recuadro(0, 0, 100, 200, canvas);
        recuadroObj.pinta();

        // Cuando se suelta el ratón, recorta la imagen y la almacena en el campo oculto...........
        recuadroObj.dom.addEventListener('mouseup', () => {
            var recortado = recuadroObj.recortar();
            document.getElementById('captured_image').value = recortado;

            // Se crea un nuuuevo elemento imagen
            var img = document.createElement('img');
            img.src = recortado;
            capturedImagesContainer.innerHTML = '';
            capturedImagesContainer.appendChild(img);
        });
    });

    contenedor.addEventListener('mousemove', (event) => {
        // Actualiza la posición del recuadro con la posición del ratón.................
        recuadro.style.left = event.offsetX - recuadro.clientWidth / 2 + 'px';
        recuadro.style.top = event.offsetY - recuadro.clientHeight / 2 + 'px';
    });

    function Recuadro(x, y, ancho, alto, imagen) {
        this.x = x;
        this.y = y;
        this.ancho = ancho;
        this.alto = alto;
        this.imagen = imagen;
    }

    Recuadro.prototype.pinta = function (color = "black") {
        // Creo el div y configuro su estilo
        var rec = document.createElement("div");
        rec.style.position = "absolute";
        rec.style.top = this.x + "px";
        rec.style.left = this.y + "px";
        rec.style.width = this.ancho + "px";
        rec.style.height = this.alto + "px";
        rec.style.border = "1px solid " + color;
        rec.style.zIndex = 99;
        // Programo el movimiento del cuadradito
        rec.addEventListener("mousedown", pulsadoRaton(this));
        rec.addEventListener("mousemove", moverRaton(this));
        rec.addEventListener("mouseup", soltarRaton(this));

        this.dom = rec;

        // Creo un contenedor para la imagen donde añadir el div creado encima;
        var contenedor = document.createElement("div");
        contenedor.style.position = "relative";
        contenedor.style.display = "inline-block";
        this.contenedor = contenedor;

        // Lo introduzco justo delante de la imagen, introduciendo la imagen dentro 
        // y el cuadradito.
        this.imagen.parentNode.insertBefore(contenedor, this.imagen);
        contenedor.appendChild(this.imagen);
        contenedor.appendChild(rec);

        function pulsadoRaton(objeto) {
            return function (ev) {
                // Si he pulsado el botón izquierdo, muevo el cuadradito
                if (ev.buttons > 0 && ev.button == 0) {
                    objeto.mouseX = ev.offsetX;
                    objeto.mouseY = ev.offsetY;
                }
            };
        }

        function moverRaton(objeto) {
            return function (ev) {
                // Si he pulsado el botón izquierdo, muevo el cuadradito
                if (ev.buttons > 0 && ev.button == 0) {
                    objeto.dom.style.left = parseInt(objeto.dom.style.left) + (ev.offsetX - objeto.mouseX) + "px";
                    objeto.dom.style.top = parseInt(objeto.dom.style.top) + (ev.offsetY - objeto.mouseY) + "px";
                }
            };
        }

        function soltarRaton(objeto) {
            return function (ev) {
                // Si he pulsado el botón izquierdo, muevo el cuadradito
                // Borro el auxiliar del movimiento
                objeto.mouseX = 0;
                objeto.mouseY = 0;
                objeto.x = parseInt(objeto.dom.style.left);
                objeto.y = parseInt(objeto.dom.style.top);
            };
        }
    };

    Recuadro.prototype.recortar = function () {
        // Crea un nuevo canvas para el recorte..........................
        var recorteCanvas = document.createElement('canvas');
        var recorteContext = recorteCanvas.getContext('2d');

        // See ajusta el tamaño del canvas de recorte al tamaño del recuadro.........
        recorteCanvas.width = this.ancho;
        recorteCanvas.height = this.alto;

        // See dibuja la parte de la imagen original que corresponde al recuadro en el canvas de recorte........
        recorteContext.drawImage(this.imagen, this.x, this.y, this.ancho, this.alto, 0, 0, this.ancho, this.alto);

        // Convierte el recorte a una URL de datos (base64) y la devuelve.........
        return recorteCanvas.toDataURL();
    };
});
