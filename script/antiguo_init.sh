#/bin/bash

# Este script carga solo el programa servidor

#PHPMusic -- Javier Sáez de la Coba 2013

source config.conf

echo $1 | sudo -S  -u $user ./main.sh &

