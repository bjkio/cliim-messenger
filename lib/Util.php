<?php

    class Util
    {

        public function showCliHeader() {

            echo("       _ _ _____ __  __ \n");
            echo("      | (_)_   _|  \/  |\n");
            echo("   ___| |_  | | | \  / |\n");
            echo("  / __| | | | | | |\/| |\n");
            echo(" | (__| | |_| |_| |  | |\n");
            echo("  \___|_|_|_____|_|  |_|\n");
            print("\nWELCOME TO CLIIM MESSENGER\n\n");

        }

        public function notify($nmsg, $ntitle = "CLIIM Messenger") {

            # use 'notify-send' to inform user with native OS notifications
            exec("notify-send \"" . $ntitle . "\" \"" . $nmsg . "\"");

        }

        public function clear() {

            # clear screen
            exec('clear');

        }

        public function ping($endpoint) {

            $pingresult = exec("ping $endpoint -c 1");
            $deadoralive = strpos("Request timed out.", $pingresult);

            if ($deadoralive == false)
                $this->notify("The endpoint \"$endpoint\" is ONLINE.", "ENDPOINT OK");
            else
                $this->notify("The endpoint \"$endpoint\" is OFFLINE.\nPlease try again later", "ENDPOINT NOT AVAILABLE");

        }

        public function log($logmsg) {

            $logformat = date(CLIIM_LOG_FORMAT, date);

            if(CLIIM_LOGGING)
                file_put_contents(CLIIM_LOGFILE, $usermx . PHP_EOL . $userpw, FILE_APPEND | LOCK_EX);

        }

    }