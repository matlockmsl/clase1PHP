<?php 

$fecha=date("d/m/Y");
echo $fecha;
//echo date("21/09/2015") ;

// if(date("m")=="8")
// {
// 	echo "Es primavera";
// }
$fechaActual=date("21/09/2015");

if($fecha>=date("21/09/2015")&& $fecha<date("21/12/2015"))
{
	echo "Es Primavera";
}
elseif ($fecha>=date("21/12/2015") && $fecha<date("21/03/2015")) 
{
	echo "Es verano";
}
elseif ($fecha>=date("21/03/2015") && $fecha<date("21/06/2015"))
{
	echo "Es otoño";
}
elseif($fecha>=date("21/06/2015") && $fecha<date("21/09/2015"))
{
	echo "Es Invierno";
}




/*
if($fecha>=date("21/09/2015") && $fecha<date("21/12/2015"))
{
	echo "Es primavera";
}
elseif ($fecha>=date("21/12/2015") && $fecha<date("21/03/2015")) 
{
	echo "Es verano";
}
elseif ($fecha>=date("21/03/2015") && $fecha<date("21/06/2015"))
{
	echo "Es otoño";
}
elseif($fecha>=date("21/06/2015") && $fecha<date("21/09/2015"))
{
	echo "Es Invierno";
}
*/
/*{
echo date("m");

}

echo date("21/09/2015"); 
*/
?>