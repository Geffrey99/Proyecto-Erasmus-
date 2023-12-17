function abrirModal(id_solicitud) {
    document.getElementById('pdfViewer').src = './pdfs/' + id_solicitud + '.pdf'; 
    document.getElementById('myModal').style.display = 'block';
  }
  
  
  document.getElementsByClassName('close')[0].onclick = function() {
    document.getElementById('myModal').style.display = 'none';
  }
  
  // cierro el modal cuando se hace click fuera----------
  window.onclick = function(event) {
    if (event.target == document.getElementById('myModal')) {
      document.getElementById('myModal').style.display = 'none';
    }
  }
  