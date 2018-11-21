<?php

    /*
     *
     * CLIIM Messenger
     * ===============
     * General config file
     *
     */

    define("CLIIM_CREDS", $_SERVER["HOME"] . "/.cliim/credentials");
    define("CLIIM_ENDPOINT", "v01-d.data.bmlr.me.uk");
    define("CLIIM_PROTOCOL", "HTTPS");
    define("CLIIM_SHARED_TOKEN", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwiZXhwIjoxNTQxODUwMzIzLCJ0eXBlIjoiYXV0aCIsImtleSI6IjE1NmFhYjZiLTUzNzgtNDcyNy04Y2NjLWI3Yzc3MGM4OGEwOCIsInByb2plY3QiOiJfIn0.9HTxPCRj9YcoAUvvhxe-ElpPrTgjrkMFcTWKqtlZGYU");

    define("CLIIM_LOGGING", true);
    define("CLIIM_LOGFILE", $_SERVER["HOME"] . "/.cliim/message.log");