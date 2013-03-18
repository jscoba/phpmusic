<?

function activado() //Devuelva 1 si está activado el servidor. Devuelve 0 si está desactivado.
{
	$result = 0;
	if(file_exists('/tmp/activated'))
	{
		$result = 1; 
	}
	return $result;
}

function escribe($number)
{
	$result = 0;
	$f1=fopen('/tmp/limbo','w+');
	fwrite($f1,$number,2);
	sleep(1);
	if (fpassthru($f1)==0)
	{
		$result = 1;
	}
	return $result;
}

function activar() //Función obsoleta, ya no hace falta crear el temporal.
{
	$f1=fopen('/tmp/limbo','w+');
	fclose($f1);
	system('chmod 777 /tmp/limbo');
}	

function disabled()  //Esto desactiva el botón de activar.
{
	if(activado() == 1)
	{
		echo 'disabled=true';
	}
}

function enabled() //Esto desactiva el botón de desactivar.
{
	if(activado() == 0)
	{
		echo 'disabled=true';
	}
}

?>
