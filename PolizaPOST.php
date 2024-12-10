<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
            <li><a class="dropdown-item" href="#">6</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Par o impar.php">7</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Numero Mayor.php">8</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Promedio.php">9</a></li>
            <li><a class="dropdown-item" href="../Ejercicios/Dia Semana.php">10</a></li>
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

     <label>Seleccione el tipo de poliza</label><br>
     <select name="poliza"> 

        <option value="">-------</option>
        <option value="1">Cobertura amplia</option>
        <option value="2">Daño a terceros</option>
        
    </select>
     
     <br><label>Tiene habito por beber alcohol?</label><br>
     <input type="checkbox" value="on" name="alcohol"> 

     <br><label>Utiliza Lentes?</label><br>
     <input type="checkbox" value="on" name="lentes"> 

     <br><label>padece alguna enfermedad como de ciencia cardiaca o diabetes</label><br>
     <input type="checkbox" value="on" name="enfermedad">

     <br><label>Tiene más de 40 años,</label><br>
     <input type="text" name="años"> 
     
    <br><br> <input class="btn btn-outline-primary" type="submit" value="Enviar" name="calcular"><br><br>

     <?php
     
        if (isset($_POST['calcular'])) {

        $tipopoliza=$_POST['poliza'];
        $alcohol=isset($_POST['alcohol']);
        $lentess=isset($_POST['lentes']);
        $enfermedadd=isset($_POST['enfermedad']);
        $edad=$_POST['años'];

         $total=0;

        if ($tipopoliza == 1 ){
            $valorpoliza=1200000;
            $total=$valorpoliza;
        } else if ($tipopoliza ==2){
            $valorpoliza=950000;
            $total=$valorpoliza;
        }
        if ($alcohol=='on'){
            $total=$total+($valorpoliza*0.1);
        } 
        else {
            $total = $total;
        } 
        if ($lentess=='on'){
            $total=$total+($valorpoliza*0.05);
        } 
        else {
            $total = $total;
        }
        if ($enfermedadd=='on'){
            $total=$total+($valorpoliza*0.05);
        } 
        else {
            $total = $total;
        }
        if ($edad>=40){
            $total=$total+($valorpoliza*0.2);
        } elseif ($edad<=39){
            $total=$total+($valorpoliza*0.1);
        }
    
        echo "El valor de la poliza es de: ",$total;
        
     }
    ?>
    
</div>
</form>
    </body>
</html> 