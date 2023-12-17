//###########__REGISTRO CANDIDATO__######################################################


//-----------Miro haber si es menor o mayor para que rellene los datos del tutor 
    document.getElementById('fecha_nac_Candidato').addEventListener('change', function () {
        var fechaNacimiento = new Date(this.value);
        var fechaActual = new Date();
    
        var edad = fechaActual.getFullYear() - fechaNacimiento.getFullYear();
        var m = fechaActual.getMonth() - fechaNacimiento.getMonth();
    
        if (m < 0 || (m === 0 && fechaActual.getDate() < fechaNacimiento.getDate())) {
            edad--;
        }
    
        var modal = document.getElementById('modal');
        var error = document.getElementById('error_fecha');
        var abrir_modal = document.getElementById('abrir');
        if (edad < 18) {
            error.textContent = 'Se necesita datos del tutor';
            abrir_modal.style.display = 'inline'; //-- Muestra el botón
        } else {
            error.textContent = '';
            abrir_modal.style.display = 'none'; //--Oculta el botón
        }
        
    });
    
 
      
    document.getElementById('abrir').addEventListener('click', function () {
        document.getElementById('modal').style.display = 'block';
    });



document.getElementsByClassName('close')[0].onclick = function() {
    document.getElementById('modal').style.display = 'none';
}


document.getElementById('guardar_info').addEventListener('click',function(){
    document.getElementById('modal').style.display='none';
})



// --------** Validacion dni del candidato y del tutor **----------------------------------------------------------

function validarDNI(dni) {
    var numero;
    var letr;
    var letra;
    var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/i;

    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    if(expresion_regular_dni.test(dni) == true){
       numero = dni.substr(0,dni.length-1);
       letr = dni.substr(dni.length-1,1);
       numero = numero % 23;
       letra = letras[numero];
      
       if (letra!=letr.toUpperCase()) {
          return 'La letra no es valida';
         
       } 
       else {
          return '';
       }
    } else {
        return 'Dni erróneo, formato no válido';
    }
}



function calcularEdad(fechaNacimiento) {
    var fechaNac = new Date(fechaNacimiento);
    var fechaActual = new Date();

    var edad = fechaActual.getFullYear() - fechaNac.getFullYear();
    var m = fechaActual.getMonth() - fechaNac.getMonth();

    if (m < 0 || (m === 0 && fechaActual.getDate() < fechaNac.getDate())) {
        edad--;
    }

    return edad;
}




document.getElementById('Formulario').addEventListener('submit', function(event) {
    event.preventDefault();

    var dni = document.getElementById('dni_Candidato');
        var nombre = document.getElementById('nombre_Candidato');
        var ap1 = document.getElementById('ap1_Candidato');
        var correo = document.getElementById('correo_Candidato');
        var domicilio = document.getElementById('domicilio_Candidato');
        var password = document.getElementById('password');
        var telefono = document.getElementById('telefono_Candidato');
        var error_dni = document.getElementById('error_dni');
        var error_telefono = document.getElementById('error_telefono');
        var error_nombre = document.getElementById('error_nombre');
        var error_ap1 = document.getElementById('error_ap1');
        var error_correo = document.getElementById('error_correo');
        var error_domicilio = document.getElementById('error_domicilio');
        var error_password = document.getElementById('error_password');
     
        var hayError = false;

        if (!dni.value) {
            error_dni.textContent = 'Dni es obligatorio';
            hayError=true;
        } else {
            error_dni.textContent = '';
        }
        if (!nombre.value) {
            error_nombre.textContent = 'No tienes nombre? ';
            hayError=true;
        }  else {
            error_nombre.textContent = '';
        }
        if (!ap1.value) {
            error_ap1.textContent = 'sin apellido ?  ';
            hayError=true;
        } else {
            error_ap1.textContent = '';
        }
        if (!correo.value) {
            error_correo.textContent = 'sin correo ?';
            hayError=true;
        } else {
            error_correo.textContent = '';
        }
        if (!domicilio.value) {
            error_domicilio.textContent = 'Este campo es necesario!';
            hayError=true;
        } else {
            error_domicilio.textContent = '';
        }
        if (!password.value) {
            error_password.textContent = 'Introduce un password y no te olvides !';
            hayError=true; 
        } else {
            error_password.textContent = '';
        }
        if (!telefono.value) {
            error_telefono.textContent = 'Este campo es necesario';
            hayError = true; 
        } else if (isNaN(telefono.value)) {
            error_telefono.textContent = 'No es válido';
            hayError = true; 
        } else {
            error_telefono.textContent = '';
        }
 //-------------------------------------------------------------------------------------------------
 //-----------Datos del tutor si el candidato es menor------------------------------------------------------------------------------------ 

 //compruebo si es menor de edad 
    var edad = calcularEdad(document.getElementById('fecha_nac_Candidato').value);
    var dniTutor = document.getElementById('dni_TutorLegal').value;
    var nombreTutor = document.getElementById('nombre_TutorLegal').value;
    var apellidoTutor = document.getElementById('apellido_TutorLegal').value;
    var telefonoTutor = document.getElementById('telefono_TutorLegal').value;
    var domicilioTutor = document.getElementById('domicilio_TutorLegal').value;

    // Comprueba si el candidato es menor de edad y si se han completado los datos del tutor
    if (edad < 18 && (!dniTutor || !nombreTutor || !apellidoTutor || !telefonoTutor || !domicilioTutor)) {
        alert('Por favor, completa los datos del tutor.');
        hayError = true;
    }
    var dniCandidato = document.getElementById('dni_Candidato').value;
    var error_dni_candidato = validarDNI(dniCandidato);
    document.getElementById('error_dni').textContent = error_dni_candidato;

    var error_dni_tutor = '';
    if (edad < 18) {
        error_dni_tutor = validarDNI(dniTutor);
        document.getElementById('error_dni_tutor').textContent = error_dni_tutor;
    }



    // Comprueba si el DNI del candidato o del tutor no es válido
    if (error_dni_candidato !== '' || error_dni_tutor !== '') {
        alert('Por favor, introduce un DNI válido.');
        hayError=true;
    } 




//-------------------------------------------------------------------------------------

document.getElementById('dni_Candidato').addEventListener('input', function () {
    var dni = this.value;
    var error_dni = document.getElementById('error_dni');
    error_dni.textContent = validarDNI(dni);
});

document.getElementById('dni_TutorLegal').addEventListener('input', function () {
    var dni = this.value;
    var error_dni = document.getElementById('error_dni_tutor'); 
    error_dni.textContent = validarDNI(dni);
});

//--------------------------------------------------------------------------------------

if (!hayError){
var formData = new FormData(this); 
    fetch("http://localhost/Becas/api/insertCandidato.php", {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (!data.candidato.success) {
            // Muestra el mensaje de error del candidato
            document.getElementById('error_dni').textContent = data.candidato.message;
        }
        if (!data.tutorLegal.success) {
            // Muestra el mensaje de error del tutor
            document.getElementById('error_dni_tutor').textContent = data.tutorLegal.message;
        }
        if (data.candidato.success && data.tutorLegal.success){
            //si no hay errores y todo ok
            window.location.href = "http://localhost/becas/index.php?menu=registroTerminado";
        }
    })
    .catch(error => console.error('Error:', error));
 }
});


