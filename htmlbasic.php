<? 
include('funciones.php');
function encabezado() { ?>
<html>
<head>
<title>PHP MUSIC</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<table>
<tr>
<td>
<a href="index.php" /><img src='img/logo.png' /></a>
</td>
</tr>
<tr>
<td>
<?php 
if(activado()==1)
{
$colorstatus = 'class="verde"';
$status= 'ACTIVADO!';
}else{
$colorstatus = 'class="rojo"';
$status= 'DESACTIVADO!';
}
echo '<p ' . $colorstatus . '>Estado de PHPMusic: ' . $status . '</p>';
?>
</td>
</tr>
</table>
<? 
}

function footer() { ?>
<table>
<tr>
<td>
<a href='about.php'> Acerca de ... </a>
</td>
<td>
	<a href='config.php'> Configuración </a>
</td>
<td>
	<a href='enviar.php?n=98'> Parar sonidos </a>
</td>
</tr>
</table>
</body>
<html>
<?
}
?>
