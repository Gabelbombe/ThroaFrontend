<?php

Class GrantController Extends BaseController
{
    const      CB_URL           = 'http://tool.throa.com/approve';

    protected  $str             = null,
               $obj             = null,
               $url             = null;

    protected  $throaItemId     = false,
               $throaWidgetId   = false,
               $request         = false;

<<<<<<< HEAD
    private    $err             = [];

=======
>>>>>>> 815e169cfbe37e142a481475e62990ad3de778ed
    /**
     * Run the trap..
     *
     * @return mixed
     */
    public function init()
    {
        $this->filters(Input::only(['throa_item_id', 'throa_widget_id', 'request']))
             ->isBase64()
             ->isJson();

        return \View::make('grant', [
            'user' => $this->obj,
            'call' => $this->url,
        ]);


    }

    /**
     * @param array $input
     * @return $this
     * @throws RuntimeException
     */
    public function filters(array $input)
    {
        if (count(array_filter($filter = filter_var_array(
            $input,
            [
                'request'       => [
                    'filter'    => FILTER_VALIDATE_REGEXP,
                    'flags'     => FILTER_NULL_ON_FAILURE,
                    'options'   => [
                                      'regexp' => '/^[a-zA-Z0-9=]+$/'
                                   ],
                ],

                'throa_item_id' => [
                    'filter'    => FILTER_VALIDATE_INT,
                    'flags'     => FILTER_REQUIRE_SCALAR | FILTER_FLAG_ALLOW_OCTAL | FILTER_NULL_ON_FAILURE,
                    'options'   => [
                                       'min_range' => 000000000, // limit 000000001
                                       'max_range' => 999999999, // limit 999999999
                                   ],
                ],
<<<<<<< HEAD

                'throa_widget_id' => [
                    'filter'      => FILTER_VALIDATE_INT,
                    'flags'       => FILTER_REQUIRE_SCALAR | FILTER_FLAG_ALLOW_OCTAL | FILTER_NULL_ON_FAILURE,
                    'options'     => [
                                        'min_range' => 000000000, // limit 000000001
                                        'max_range' => 999999999, // limit 999999999
                                     ],
                ],
            ]
        ))) !== count($input)) App::abort(403, "Bad metrics: {$this->filterNotEmpty($filter)}, in GET request..");


=======

                'throa_widget_id' => [
                    'filter'      => FILTER_VALIDATE_INT,
                    'flags'       => FILTER_REQUIRE_SCALAR | FILTER_FLAG_ALLOW_OCTAL | FILTER_NULL_ON_FAILURE,
                    'options'     => [
                                        'min_range' => 000000000, // limit 000000001
                                        'max_range' => 999999999, // limit 999999999
                                     ],
                ],
            ]
        ))) !== count($input)) Throw New \RuntimeException("Bad metrics: {$this->filterNotEmpty($filter)}, in GET request..");

>>>>>>> 815e169cfbe37e142a481475e62990ad3de778ed
        foreach($input AS $key => $value)
        {
            $this->{$this->toCamelCase($key)} = $value;
        }

        $this->makeUrl();

        return $this;
    }

    /**
     * @return $this
     * @throws LogicException
     */
    public function isBase64()
    {
<<<<<<< HEAD
        if (! preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $this->request)) App::abort(403, 'Data is of wrong type..');
=======
        if (! preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $this->request)) Throw New \LogicException('Data is of wrong type..');
>>>>>>> 815e169cfbe37e142a481475e62990ad3de778ed

        $this->str = base64_decode($this->request);

            return $this;
    }

    /**
     * @return $this
     * @throws LogicException
     */
    public function isJson()
    {
<<<<<<< HEAD
        if (! isset($this->str) || empty($this->str)) App::abort(403, 'String was not set..');

        $this->validateJsonContent();

            return $this;
    }

    /**
     * @return $this
     * @throws LogicException
     */
    private function validateJsonContent()
    {
        $obj = json_decode($this->str);

        if (empty($obj) || 0 !== json_last_error()) App::abort(403, 'Decode error: ' . json_last_error_msg());

        $this->obj = $obj;

            return $this;
    }

    /*
     * helpers
     */

    private function filterNotEmpty(array $array)
    {
        return implode(', ', array_keys(array_filter($array, create_function('$a','return $a=="";'))));
    }

    protected function toCamelCase($string)
    {
        return preg_replace_callback("/_[a-zA-Z]/", function($matches)
            {
                return strtoupper($matches[0][1]);
            },
        $string);
    }

    private function makeUrl()
    {
        $this->url = self::CB_URL . "/{$this->throaItemId}/{$this->throaWidgetId}";
=======
        if (! isset($this->str) || empty($this->str)) Throw New \LogicException('String was not set..');

        $this->validateJsonContent();
>>>>>>> 815e169cfbe37e142a481475e62990ad3de778ed

            return $this;
    }

<<<<<<< HEAD
=======
    /**
     * @return $this
     * @throws LogicException
     */
    private function validateJsonContent()
    {
        $obj = json_decode($this->str);

        if (empty($obj) || 0 !== json_last_error()) Throw New \LogicException('Decode error: ' . json_last_error_msg());

        $this->obj = $obj;

            return $this;
    }

    /*
     * helpers
     */

    private function filterNotEmpty(array $array)
    {
        return implode(', ', array_keys(array_filter($array, create_function('$a','return $a=="";'))));
    }

    protected function toCamelCase($string)
    {
        return preg_replace_callback("/_[a-zA-Z]/", function($matches)
            {
                return strtoupper($matches[0][1]);
            },
        $string);
    }

    private function makeUrl()
    {
        $this->url = self::CB_URL . "/{$this->throaItemId}/{$this->throaWidgetId}";

            return $this;
    }

>>>>>>> 815e169cfbe37e142a481475e62990ad3de778ed
    public function setString($value)
    {
        $this->url = $value;
    }
}
