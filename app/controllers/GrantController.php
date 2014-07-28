<?php

Class GrantController Extends BaseController
{
    USE Magic;

    const INSTAGRAM = '//instagram.com/p/';

    protected   $url = false,
                $app = false;

    public function init($url, $app)
    {
        $this->testUrl($url)
             ->testApp($app);

        return View::make('grant', [
            'url' => $this->url,
            'app' => $this->app,
        ]);
    }

    /**
     * @param $url
     * @throws HttpResponseException
     */
    private function testURL($url)
    {
        $qualified = self::INSTAGRAM . $url;

        $ch = curl_init($qualified);
        curl_setopt_array($ch, [
            CURLOPT_HEADER => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CONNECTTIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
        ]);

        if (FALSE === ($response = curl_exec($ch)) || empty($response))
        {
            Throw New HttpResponseException('Request invalid; halting compiler, Curl error' . print_r(curl_error($ch),1));
        }

        // falls between 200:OK and 206:Partial_Content
        if (! in_array(curl_getinfo($response, CURLINFO_HTTP_CODE), range(200,206)))
        {
            Throw New HttpResponseException('Asset url does not exists; halting compiler..');
        }

        $this->__set('url', $qualified);

        curl_close($response);
    }
}
