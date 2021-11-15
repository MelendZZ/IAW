#!/bin/bash

hora=`date| awk '{print $5}' | awk -F: '{print $1 ":" $2}'`

echo "Son las $hora"

if [ `date| awk '{print $5}' | awk -F: '{print $1}'` -ge "5" ] && [ `date| awk '{print $5}' | awk -F: '{print $1}'` -lt "13" ]; then

	echo "Buenos dias `cat /etc/passwd | grep $USER | awk -F: '{print $5}' | tr -d ","`"



elif [ `date| awk '{print $5}' | awk -F: '{print $1}'` -ge "13" ] && [ `date| awk '{print $5}' | awk -F: '{print $1}'` -lt "20" ]; then

	echo "Buenas tardes `cat /etc/passwd | grep $USER | awk -F: '{print $5}' | tr -d ","`"


else

	echo "Buenas noches `cat /etc/passwd | grep $USER | awk -F: '{print $5}' | tr -d ","`"


fi

