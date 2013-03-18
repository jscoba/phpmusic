<?
include('htmlbasic.php');
encabezado();
?>
<div id='activación'> 
 <h3> Activación del Servidor </h3>
	<form name='formulario' id='activ' method='get' action='inicio.php'>
	<input type='submit' value='Activar servidor' <?  disabled(); ?>>
	</form>
</div>
<div id='stop'> 
 <h3> Desactivación del Servidor </h3>
	<form name='formulario' id='desac' method='get' action='desac.php'>
	<input type='submit' value='Desactivar servidor' <?  enabled(); ?>>
	</form>
</div>
<div id="cambiar modo">
	<p>Si deseas cambiar el banco de sonidos, leete la documentación correspondiente de como hacerlo</p>
</div>
	

<?
footer();

?>
