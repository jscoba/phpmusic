#/bin/bash

#Script Principal
#PHPMusic -- Javier Sáez de la Coba 2013

if [ -f /tmp/limbo ]; then
	echo
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
	if [ $number != 0 ]; then
		ruta=../songs/${mode}/${number}
		/usr/bin/mpg123 ${ruta}.mp3 &
		echo 0 > /tmp/limbo
	fi
	sleep 0.5
done

rm /tmp/limbo
killall mpg123
rm /tmp/activated
echo 'BYE :)!'
