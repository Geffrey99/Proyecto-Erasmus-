<head>
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body id="login">
<div id="login-container">
    <div id="login-form">
        <h2>Iniciar sesión - Coordinador</h2>

    <form action="./api/verificarlogueos.php" method="post">
        <div>   
            <label for="dni_Cordinador">DNI:</label>
            <input type="text" class="dni" id="dni_Cordinador" name="dni_Cordinador" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" class="passw" id="password" name="password" required>
        </div>
        <div class="button-container">
            <input type="submit" name="form_coordinador" value="Iniciar sesión">
        </div>
    </form>

    <?php
 
 if (isset($_GET['error']) && $_GET['error'] == 'PasswordIncorrecta') {
     echo '<p id="error-mensaje">!Contraseña incorrecta!</p>';
 } elseif (isset($_GET['error']) && $_GET['error'] == 'dniNoEncontrado') {
     echo '<p id="error-mensaje">!DNI no encontrado!</p>';
 }
 ?>
  
  </div>
        </div>
</body>