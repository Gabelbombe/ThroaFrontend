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
            if (count(array_filter($filter = filter_var_array(
                $this->payload,
                [
                    'url' => [
                        'filter'  => FILTER_VALIDATE_REGEXP,
                        'flags'   => FILTER_NULL_ON_FAILURE,
                        'options' => [
                            'regexp' => '/^[a-zA-Z0-9_]+$/'
                        ],
                    ],

                    'app' => [
                        'filter'  => FILTER_VALIDATE_INT,
                        'flags'   => FILTER_REQUIRE_SCALAR | FILTER_FLAG_ALLOW_OCTAL | FILTER_NULL_ON_FAILURE,
                        'options' => [
                            'min_range'    => 00000,    // limit 00001
                            'max_range'    => 99999,    // limit 99999
                        ],
                    ],
                ]
            ))) !== count($this->payload)) Throw New \RuntimeException("Bad metrics: {$this->filterNotEmpty($filter)}, in GET request..");

            return $this;
        }

        private function filterNotEmpty(array $array)
        {
            return implode(', ', array_keys(array_filter($array, create_function('$a','return $a=="";'))));
        }
    }
}