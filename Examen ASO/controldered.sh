#!/bin/bash

war=`cat red.log | grep warning | wc -l`

echo "Hay $war eventos de tipo warning. ¿Deseas ver a que tarjeta de red le afecta ese evento? (s/n) "
read resp

tarjeta=`cat red.log | grep warning | awk -F " " '{print $4}'`

if [ $resp == "s" ]; then

	echo "La tarjeta de red `cat red.log | grep warning | awk -F " " '{print $4}'` es la afectada y su direccion IP es `ip a l | grep $tarjeta | grep inet | awk -F " "  '{print $2}'`  "

fi
