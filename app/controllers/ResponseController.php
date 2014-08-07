<?php

Class ResponseController Extends BaseController
{
    public function init()
    {
        return 'true';
    }

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
