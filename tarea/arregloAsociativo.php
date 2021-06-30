<!doctype html>
<html>
  <head>
      <title>Formulario</title>
  </head>
  <body>
      <form method="post" action=""><br>
        <fieldset>
          <legend>Datos personales</legend>
          <legend>Datos de empleado 1</legend>
          <label>Nombre</label>
          <input type="text" name ="nombre1"   placeholder="Ingrese nombre"/>
          <br />
          <label>Apellido</label>
          <input type="text" name ="apellido1"  placeholder="Ingrese apellido"/>
          <br />
          <label>Cedula</label> 
          <input type="number" name ="cedula1"  placeholder="Ingrese cedula"/>
          <br />
          <label>Sueldo</label> 
          <input type="number"  name ="sueldo1"  placeholder="Ingrese sueldo"/><!--Texto por defecto  -->
          <br />
          <label>Lugar de trabajo</label>
          <select name ="lugar1" placeholder="LUGAR DE TRABAJO"> 
          <option selected="true" disabled="disabled">seleccione una opcion</option>
            <option value="Caracas">Caracas</option>
            <option value="Maracaibo">Maracaibo</option>
            <option value="Barquisimeto">Barquisimeto</option>
          </select>
          <br />
          <label>Departamento</label>
          <select  name ="departamento1" placeholder="LUGAR DE TRABAJO"> 
          <option selected="true" disabled="disabled">seleccione una opcion</option>
            <option value="Financiero">Financiero</option>
            <option value="Recursos humanos">Recursos humanos</option>
            <option value="Logística y operaciones">Logística y operaciones</option>
            <option value="Dirección general">Dirección general</option>
          </select>
          <br>  <br>  <hr> <br>
         
      

      
          <legend>Datos de empleado 2</legend>
          <label>Nombre</label>
          <input type="text" name ="nombre2"   placeholder="Ingrese nombre"/>
          <br />
          <label>Apellido</label>
          <input type="text" name ="apellido2"  placeholder="Ingrese apellido"/>
          <br />
          <label>Cedula</label> 
          <input type="number" name ="cedula2"  placeholder="Ingrese cedula"/>
          <br />
          <label>Sueldo</label> 
          <input type="number"  name ="sueldo2"  placeholder="Ingrese sueldo"/><!--Texto por defecto  -->
          <br />
          <label>Lugar de trabajo</label>
          <select name ="lugar2" placeholder="LUGAR DE TRABAJO"> 
          <option selected="true" disabled="disabled">seleccione una opcion</option>
            <option value="Caracas">Caracas</option>
            <option value="Maracaibo">Maracaibo</option>
            <option value="Barquisimeto">Barquisimeto</option>
          </select>
          <br />
          <label>Departamento</label>
          <select  name ="departamento2" placeholder="LUGAR DE TRABAJO"> 
          <option selected="true" disabled="disabled">seleccione una opcion</option>
            <option value="Financiero">Financiero</option>
            <option value="Recursos humanos">Recursos humanos</option>
            <option value="Logística y operaciones">Logística y operaciones</option>
            <option value="Dirección general">Dirección general</option>
          </select>
          <br>   <br> <hr> <br>
    
     
    
        
          <legend>Datos de empleado 3</legend>
          <label>Nombre</label>
          <input type="text" name ="nombre3"   placeholder="Ingrese nombre"/>
          <br />
          <label>Apellido</label>
          <input type="text" name ="apellido3"  placeholder="Ingrese apellido"/>
          <br />
          <label>Cedula</label> 
          <input type="number" name ="cedula3"  placeholder="Ingrese cedula"/>
          <br />
          <label>Sueldo</label> 
          <input type="number"  name ="sueldo3"  placeholder="Ingrese sueldo"/><!--Texto por defecto  -->
          <br />
          <label>Lugar de trabajo</label>
          <select name ="lugar3" placeholder=""> 
          <option selected="true" disabled="disabled">seleccione una opcion</option>
            <option value="Caracas">Caracas</option>
            <option value="Maracaibo">Maracaibo</option>
            <option value="Barquisimeto">Barquisimeto</option>
          </select>
          <br />
          <label>Departamento</label>
          <select  name ="departamento3" placeholder=""> 
          <option selected="true" disabled="disabled">seleccione una opcion</option>
            <option value="Financiero">Financiero</option>
            <option value="Recursos humanos">Recursos humanos</option>
            <option value="Logística y operaciones">Logística y operaciones</option>
            <option value="Dirección general">Dirección general</option>
          </select>
          <br>
          <input type="submit" value="Aceptar"/>
      </fieldset>
      </form>
  </body>

<?php
error_reporting(0);

$varNombre   = $_POST['nombre1'];
$varApellido = $_POST['apellido1'];
$varCedula   = $_POST['cedula1'];
$varSueldo   = $_POST['sueldo1'];
$varLugar    = $_POST['lugar1'];
$varDepartamento = $_POST['departamento1'];

$varNombre2   = $_POST['nombre2'];
$varApellido2 = $_POST['apellido2'];
$varCedula2   = $_POST['cedula2'];
$varSueldo2   = $_POST['sueldo2'];
$varLugar2    = $_POST['lugar2'];
$varDepartamento2 = $_POST['departamento2'];

$varNombre3   = $_POST['nombre3'];
$varApellido3 = $_POST['apellido3'];
$varCedula3   = $_POST['cedula3'];
$varSueldo3   = $_POST['sueldo3'];
$varLugar3    = $_POST['lugar3'];
$varDepartamento3 = $_POST['departamento3'];

  $Empleado[0] = [
    'nombre'   => $varNombre,
    'apellido' => $varApellido,
    'cedula'   => $varCedula,
    'sueldo'   => $varSueldo,
    'lugar'    => $varLugar,
    'departamento' => $varDepartamento
  ];

  $Empleado[1] = [
    'nombre'   => $varNombre2,
    'apellido' => $varApellido2,
    'cedula'   => $varCedula2,
    'sueldo'   => $varSueldo2,
    'lugar'    => $varLugar2,
    'departamento' => $varDepartamento2
  ];

  $Empleado[2] = [
    'nombre'   => $varNombre3,
    'apellido' => $varApellido3,
    'cedula'   => $varCedula3,
    'sueldo'   => $varSueldo3,
    'lugar'    => $varLugar3,
    'departamento' => $varDepartamento3
  ];

  $mask = 1;

  foreach($Empleado as $valor){
    echo "<h2>Empleado #".$mask."</h2>";
    echo "<h3> Nombre: ".$valor['nombre']."</h3>";
    echo "<h3> Cedula: ".$valor['cedula']."</h3>";
    echo "<h3> Sueldo: ".$valor['sueldo']."</h3>";
    echo "<h3> Lugar: ".$valor['lugar']."</h3>";
    echo "<h3> Departamento: ".$valor['departamento']."</h3>";
    echo "<br> <hr> <br>";

    $mask = $mask + 1;
  }  
?>