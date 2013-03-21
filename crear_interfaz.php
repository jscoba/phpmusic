<?
include('htmlbasic.php');
include('bancoprincipal.php');
encabezado();

#if(sizeof($principal) % 5 == 0)
#{
	$tamano = sizeof($principal);
	$anchotabla = 5;
	$altotabla =  (int)($tamano / $anchotabla);
#}

?>
<div id='interfaz_principal'>
<table>

<?
for ($i=0;$i<$altotabla;$i++){
	print("<tr>");
	 for($j= 0; $j < $anchotabla; $j++) {
			print('<td><a href="enviar.php?n='. $principal[$i+$j]['archivo'].'" /><img src="img/principal/'.$principal[$i+$j]['imagen'].'" alt="'.$principal[$i+$j]['nombre'].'" /></a></td>');
	 }
}

?>

</table>

</div>
