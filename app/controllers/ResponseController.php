<?php

Class ResponseController Extends BaseController
{
    const   CB_URL  = 'http://tool.throa.com/index.php/permission/auth';
    const   GALLERY = 'http://filson.zaneray.com/filson/filson-life/gallery/';

    public function init($itemID, $widgetID)
    {
        if (preg_match('/^[1-9][0-9]{0,25}$/', $itemID) && preg_match('/^[1-9][0-9]{0,25}$/', $widgetID))
        {
            if (202 === ($post = $this->post($itemID, $widgetID)))
            {
                return Redirect::away(self::GALLERY);
            }
			App::abort($post, "Response was: $post");
        }
        App::abort(418, 'You must be a teapot..');
    }

    private function post($itemID, $widgetID)
    {
        $ch = curl_init(self::CB_URL . "/{$itemID}/{$widgetID}");
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => 1,
        ]);

        curl_exec($ch); // test

        return curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
}