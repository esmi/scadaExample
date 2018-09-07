#!/bin/bash
SERVER_PORT=8000
src="../vendor/esmi/scadajs/src"

#check esmi/scadajs package is exist.
if  ! ( [ -d ./src ] || [ -L ./src ] ) ; then
    if [ -d "$src" ]; then
        ln -s "$src" ./src
    else
        echo "esmi/scadajs package not exist, abort!"
        exit
    fi
fi
cat << EOF

use your browser look at "http://localhost:$SERVER_PORT/"

EOF
php -S localhost:$SERVER_PORT
