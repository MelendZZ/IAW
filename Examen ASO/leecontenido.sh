#!/bin/bash

if [ $# -eq 3 ]; then

	if [ -e $1 ]; then

		if [ $2 -lt $3 ] || [ $2 -eq $3 ]; then

			awk 'NR=='$2', NR=='$3'' $1

		else

			echo "El primer operando $2 no puede ser mayor que el segundo $3"

		fi

	else

		echo "El fichero $1 no existe"

	fi

else

	echo "No has introducido los argumentos suficientes, son necesarios 3"


fi
