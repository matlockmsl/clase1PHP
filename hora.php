<?php
$hora=date("H:i:s");
echo $hora;
$horaActual=date("H");
echo "<br />Hora: ". $horaActual."<br /><br />";

if($horaActual>=0 &&$horaActual<6)
{
	echo "Es la madrugada";
}

elseif($horaActual>=6 && $horaActual<12)
{
	echo "Es la mañana";
}
elseif ($horaActual>=12 && $horaActual<20) {
	echo "Es la tarde";
}
else
{
	echo "Es la noche";
}
?>