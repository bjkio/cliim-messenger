<?php

    class Connector
    {

        function __construct($usertoken) {

            # inform user if endpoint is available
            $Util = new Util();
            $Util->ping(CLIIM_ENDPOINT);

            $this->epclient = \Directus\SDK\ClientFactory::create(CLIIM_SHARED_TOKEN, [

                'base_url' => CLIIM_PROTOCOL . '://' . CLIIM_ENDPOINT,
                'version' => '1.1'

            ]);

        }

        public function validateCreds($mx, $pw) {

            print_r($this->epclient->getItems("directus_users"));

        }

    }