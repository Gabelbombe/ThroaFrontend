<?php

Namespace Helpers
{
    Class Bootstrap
    {
        public function __construct(array $payload = [])
        {
            if ((! $payload['type'] ?: 0))
            {
                parse_str(implode("&", array_slice($payload['args'], 1)), $_GET);
            }

            $this->payload = New Metrics($_GET);

            $this->payload->inputs()->filters();
        }


        public function run()
        {
            header('Content-type: text/plain; charset=UTF-8');

            print_r('hit run');
        }
    }
}