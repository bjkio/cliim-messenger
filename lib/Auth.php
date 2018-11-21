<?php

    class Auth
    {

        function __construct() {

            $this->getCredentials();

        }

        function __destruct() {

            readline_clear_history();

        }

        public function parseCredentials() {



        }

        private function getCredentials() {

            # Check if credentials already exist
            if(!file_exists(CLIIM_CREDS)) {

                $createCred = readline("Seems that there are no credentials saved on your system.\nDo you want to add a new user now? [yes/no]: ");

                if($createCred == "yes") $this->setCredentials();
                elseif ($createCred == "no") {

                    echo "\nYou need to provide email and password to use this service. Aborting.\n";
                    exit();

                }
                else {

                    echo "\nPlease type in \"yes\" or \"no\". Aborting.\n";
                    exit();

                }

            } else {



            }

        }

        private function setCredentials() {

            $Util = new Util();

            echo "\nPlease provide email and password\n\n";

            # get user input
            $usermx = readline("E-Mail: ");
            $userpw = readline("Password: ");

            # init client connector
            $Connector = new Connector(CLIIM_SHARED_TOKEN);

            do {

                $Util->clear();
                echo "Retrieving user data... Please wait.";

                for($i=1; $i<=30; $i++) {

                    echo "#";
                    sleep(1);

                }

            } while($Connector->validateCreds($usermx, $userpw));

            # write credentials into file
            # file_put_contents(CLIIM_CREDS, $usermx . PHP_EOL . $userpw, FILE_APPEND | LOCK_EX);

        }

    }