document.getElementById('FormSolicitudd').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var telefono = document.getElementById('TELEFONO').value;
    var email = document.getElementById('EMAIL').value;
    var domicilio = document.getElementById('DOMICILIO').value;
    //  regexTelef(formato español) 
    var regexTelefono = /^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/;
    var regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var hayError = false;

 //--------- Valida el telefono
    if (!regexTelefono.test(telefono)) {
        document.getElementById('error_TELEFONO').textContent ='Introduce un numero de telefono válido';
        hayError = true; 
    } else {
        document.getElementById('error_TELEFONO').textContent = '';
    }
    //--------- Valida el domicilio
    if (!domicilio) {
        document.getElementById('error_DOMICILIO').textContent ='Introduce un domicilio';
        hayError = true;
    }else {
        document.getElementById('error_DOMICILIO').textContent ='';
    }
    //--------- Valida el email
    if (!regexEmail.test(email)) {
        document.getElementById('error_EMAIL').textContent = 'Introduce un correo válido.';
        hayError = true;
    } else {
        document.getElementById('error_EMAIL').textContent ='';
    }


    if (!hayError) {
        // Si no hay errores muestr00 el modal de confirmaciOOOn
        var confirmacion = confirm('¿Estás seguro de que quieres enviar la solicitud?');
        if (confirmacion) {
            // Si el usuario hace clic en Aceptar, envía el formulario--------------->
            this.submit();
        }
    }
});

