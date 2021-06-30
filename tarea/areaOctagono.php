<head>
     <title>Document</title>
</head>

<body>

<form method="post" action=""><br>
Ingrese longitud del lado:<br>
    <input type="text" name="lado"><br>
Ingrese longitud de la apotema:<br>
    <input type="text" name="apotema"><br>
    <input type="submit" value="Calcular"><br>
</form>

</body>

<?php
error_reporting(0);
$var_lado    = $_POST['lado'];
$var_apotema = $_POST['apotema'];

$perimetro = $var_lado * 8;
$area = ($perimetro * $var_apotema) / 2;



echo "El area del octagono es de: ".$area."cm²"

?>
</html>