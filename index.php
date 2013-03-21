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
$k = 0;
for ($i=0;$i<$altotabla;$i++){
	print("<tr>");
	 for($j= 0; $j < $anchotabla; $j++) {
			print('<td><a href="enviar.php?n='. $principal[$k]['archivo'].'" /><img src="img/principal/'.$principal[$k]['imagen'].'" alt="'.$principal[$k]['nombre'].'" /></a></td>');
			$k++;
	 }
}

?>

</table>

</div>

<?
footer();
?>
