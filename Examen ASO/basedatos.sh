#!/bin/bash


if [ -e $1 ]; then

	if [ -w $1 ]; then


		echo "Bienvenido al script de la base de datos de la biblioteca"
		echo "Seleccione una opcion"
		echo "1) Añadir registro"
		echo "2) Consultar registro"
		echo "3) Ver libros"
		echo "4) Salir"

		read opc


		if [ $opc == 1 ]; then

			read -p "Que titulo quieres añadir? " titulo
			read -p "Que autor escribio ese libro? " autor
			read -p "Cual es su editorial? " edi

			if [ $titulo != '' ] && [ $autor != '' ] && [ $edi != '' ]; then
				echo "$titulo - $autor - $edi" >> $1

			else
				echo "Alguno de los campos está vacio"

			fi

		elif [ $opc == 2 ]; then

			read -p "Cual es el titulo del libro que quieres buscar? " libro

			if [ `cat $1 | grep $libro | wc -l` -ne 0 ]; then

				cat $1 | grep $libro

			else
				echo "El libro $libro no está en nuestra base de datos"

			fi

		elif [ $opc == 3 ]; then

			echo "Hay `cat $1 | wc -l ` libros en nuestra base de datos"

			cat $1 | sort -k1

		else
			echo "Muchas gracias por utilizar nuestra base de datos, hasta la proxima"


		fi


	else
		echo "No tienes derecho de escritura en nuestra base de datos"

	fi


else

	read -p "El fichero $1 no existe, desea crearlo? (s/n) " resp

	if [ $resp == "s" ]; then

		touch $1

	else
		echo "Hasta pronto"

	fi

fi

