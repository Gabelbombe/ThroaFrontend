<?php

Class HomeController Extends BaseController
{
	public function init()
	{
		return View::make('default');
	}

    public function phpInfo()
    {
        return View::make('phpinfo');
    }
}
