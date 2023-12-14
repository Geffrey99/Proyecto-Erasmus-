window.addEventListener("load", function () {
   // var url = "prue.pdf";
    const contenedor = this.document.getElementById("contenedor");
    const abrirPDF = this.document.getElementById("abrir");
    const document1 = this.document.getElementById("OTRO_PDF");

    abrirPDF.onclick = function (ev) {
        ev.preventDefault();
        if (document1.files.length == 1 && document1.files[0].type == "application/pdf") {
            console.log("fdfds");
            var iframe = document.createElement("iframe");
           iframe.style.height="100%";
           iframe.style.width="100%";
            
            //fondo modal
            var modal = document.createElement("div");
            modal.style.position = "fixed";
            modal.style.left = 0;
            modal.style.top = 0;
            modal.style.width = "100%";
            modal.style.height = "100%";
            modal.style.backgroundColor = "black";
            modal.style.zIndex = 99;
            document.body.appendChild(modal);
            // body.appendChild(modal);

         
            // contenedor.appendChild(iframe);

            //contenido modal
            var visualizador = document.createElement("div");
            visualizador.style.position = "fixed";
            visualizador.style.left = "15%";
            visualizador.style.top = "15%";
            visualizador.style.width = "70%";
            visualizador.style.height = "70%";
            visualizador.style.backgroundColor = "white";
            visualizador.style.zIndex = 100;
            document.body.appendChild(visualizador);
            visualizador.appendChild(iframe);

          
            var closer = document.createElement("span");
            closer.innerHTML = "X";
            closer.style.position = "fixed"
            closer.style.padding = "5px";
            closer.style.backgroundColor = "white";
            closer.style.top = 0;
            closer.style.right = 0;
            closer.style.zIndex = 101;
            document.body.appendChild(closer);


            closer.onclick=function(){
                document.body.removeChild(modal);
                document.body.removeChild(visualizador);
                document.body.removeChild(this);
            }
            visualizador.ondblclick = function () {
                document.body.removeChild(modal);
                document.body.removeChild(closer);
                document.body.removeChild(this);
            }


            // var reader=new FileReader();
            // reader.onload=function(){
            //     iframe.src=reader.result;
            // }
            // reader.readAsDataUrl(document1.files[0]);
            
           iframe.src=URL.createObjectURL(document1.files[0]);


        }
    }
})