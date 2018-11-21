<?php

    require_once(__DIR__ . '/../sdk-php/vendor/autoload.php');
    require_once(__DIR__ . '/../cliim-config.php');

    include(__DIR__ . '/Auth.php');
    include(__DIR__ . '/Util.php');
    include(__DIR__ . '/Connector.php');

    class Cliim
    {

        function __construct() {

            # Show CLI Header
            $Util = new Util();
            $Util->showCliHeader();

            new Auth();

        }

    }