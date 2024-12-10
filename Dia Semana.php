<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia Semana</title>
    <link rel="stylesheet" href="../Ejercicios/CSS/Estilos.css">
</head>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ejercicios
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Ejercicios/Nombre.php">1</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Formulario.php">2</a></li>
            <li><a class="dropdown-item" href="#">4</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Area.php">5</a></li>
            <li><a class="dropdown-item" href="#">6</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Par o impar.php">7</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Numero Mayor.php">8</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Promedio.php">9</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Socios.php">11</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Notas Universidad.php">12</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Salario.php">13</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Viaje Avion.php">14</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Combustible.php">15</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Hogar Servicios.php">16</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Iva y descuento.php">17</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Condicionales.php">18</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/While y do-while.php">19</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/For.php">20</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Método GET
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Ejercicios/VelocidadGET.php">1</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/PinturasGET.php">2</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/PromedioGET.php">3</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/HipotenusaGET.php">4</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/BicicletaGET.php">5</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Par o imparGET.php">6</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Mayor o menorGET.php">7</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Método POST
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Ejercicios/CalificacionesPOST.php">1</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/AlturaPOST.php">2</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/PolizaPOST.php">3</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/VacunasPOST.php">4</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/PromedioPOST.php">5</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/BecasPOST.php">6</a></li>
        </ul>
        </li>

    </ul>
    </div>
  </div>
</nav>

<div id="caja">
    <form method="post">
        <label for="numero">Número (1-7):</label>
        <input type="number" id="numero" name="numero" min="1" max="7">
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = (int)$_POST['numero'];
        $dias = ["1" => "Lunes", "2" => "Martes", "3" => "Miércoles", "4" => "Jueves", "5" => "Viernes", "6" => "Sábado", "7" => "Domingo"];
        echo isset($dias[$numero]) ? "<p>El día de la semana es " . $dias[$numero] . ".</p>" : "<p>Número inválido. Debe ser entre 1 y 7.</p>";
    }
    ?>

</div>
</body>
</html>