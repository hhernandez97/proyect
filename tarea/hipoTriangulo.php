<head>
     <title>Document</title>
</head>

<body>

<form method="post" action=""><br>
Ingrese el primer cateto:<br>
    <input type="text" name="cat1"><br>
Ingrese el segundo cateto:<br>
    <input type="text" name="cat2"><br>
    <input type="submit" value="Calcular"><br>
</form>

</body>

<?php
error_reporting(0);
$a = $_POST['cat1'];
$b= $_POST['cat2'];

$hipotenusa = pow($a, 2) + pow($b, 2);
echo "La hipotenusa del triangulo es de: ".sqrt($hipotenusa)."cm";
?>
</html>