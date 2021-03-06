#/bin/bash

#Script Principal
#PHPMusic -- Javier Sáez de la Coba 2013

if [ -f /tmp/limbo ]; then
	rm -f /tmp/limbo	
	touch /tmp/limbo
	echo 0  > /tmp/limbo
	chmod 777 /tmp/limbo
else
	touch /tmp/limbo
	echo 0  > /tmp/limbo
	chmod 777 /tmp/limbo
fi

source ../script/config.conf
touch /tmp/activated
read number < /tmp/limbo
echo $number

while [ $number != 99 ] ; do
	read number < /tmp/limbo
	if [ $number != 98 ];then
		if [ $number != 0 ]; then
			ruta=../songs/${mode}/${number}
			/usr/bin/mpg123 ${ruta}.mp3 &
			echo 0 > /tmp/limbo
		fi
	else
		killall mpg123
		echo 0 > /tmp/limbo
	fi
	sleep 0.1
done

rm /tmp/limbo
killall mpg123
rm /tmp/activated
echo 'BYE :)!'
