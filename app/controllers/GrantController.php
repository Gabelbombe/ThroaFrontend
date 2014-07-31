<?php

Class GrantController Extends BaseController
{
    protected   $str  = null,
                $obj  = null;

    /**
     * Run the trap..
     *
     * @return mixed
     */
    public function init()
    {
        $this->isBase64(current(Input::only(['request'])))->isJson();

        return \View::make('debug.dump', [
            'data' => $this->obj,
        ]);

    }

    /**
     * @param $data
     * @return $this
     * @throws LogicException
     */
    public function isBase64($data)
    {
        if (! preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $data)) Throw New \LogicException('Data is of wrong type..');

        $this->str = base64_decode($data);

            return $this;
    }

    public function isJson()
    {
        if (! isset($this->str) || empty($this->str))   Throw New \LogicException('String was not set..');

        $this->validateJsonContent();
        $this->obj = json_decode($this->str);

            return $this;
    }


    private function validateJsonContent()
    {
        $obj = json_decode($this->str);
        echo (empty($obj) || 0 !== json_last_error()) ? 'yes' : 'no';
    }

    /*
    /
     * Legacy
     * @param $url
     * @return $this
     * @throws HttpResponseException
     /
    private function testUrl($url)
    {
        $qualified = self::INSTAGRAM . $url;

        $ch = curl_init($qualified);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => 1,
        ]);

        curl_exec($ch); // test

        // falls between 200:OK and 206:Partial_Content
        if (! in_array(curl_getinfo($ch, CURLINFO_HTTP_CODE), range(200,206)))
        {
            Throw New HttpResponseException('Asset url does not exists; halting compiler..');
        }

            $this->setUrl($qualified);

        curl_close($ch);

        return $this;
    }
*/

    public function setString($value)
    {
        $this->url = $value;
    }
}
