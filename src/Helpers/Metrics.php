<?php

Namespace Helpers
{
    Class Metrics
    {
        protected $payload   = [];

        public function __construct(array $payload)
        {
            $this->payload = $payload;
        }

        /**
         * Must have args to run
         *
         * @return $this
         * @throws \RuntimeException
         */
        public function inputs()
        {
            // Should be a global setter
            if (empty($this->payload)) Throw New \RuntimeException('Input cannot be empty..');

            return $this;
        }


        /**
         * @return $this
         * @throws \RuntimeException
         */
        public function filters()
        {
            if (count(filter_var_array(
                $this->payload,
                [
                    'url' => FILTER_VALIDATE_URL,
                    'app' => FILTER_VALIDATE_INT,
                ]
            )) !== count($this->payload)) Throw New \RuntimeException('Bad metrics in GET request..');

            return $this;
        }
    }
}