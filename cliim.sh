#!/bin/bash

notify-send "Hello World!"

curl https://v01-d.data.bmlr.me.uk/_/?access_token=test123 -X POST /_/auth/authenticate
