<?php

Class GrantController Extends BaseController
{
//    USE \Traits\Setters,
//        \Traits\Getters;

    const INSTAGRAM = 'http://instagram.com/p/';

    protected   $url = false,
                $app = false;

    /**
     * Run the trap..
     *
     * @param $url
     * @param $app
     * @return mixed
     */
    public function init($url, $app)
    {
        $this->testUrl($url)
             ->testApp($app);

        return \View::make('grant', [
            'url' => $this->url,
            'app' => $this->app,
        ]);
    }

    /**
     * @param $url
     * @return $this
     * @throws HttpResponseException
     */
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

    private function testApp($app)
    {
        unset($app);
        return true;
    }

    public function setUrl($value)
    {
        $this->url = $value;
    }
}
