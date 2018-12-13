#!/bin/bash

notify-send "Hello World!"

curl https://n01.cliim.bmlr.me.uk/_/?access_token=test123 -X POST /_/auth/authenticate
