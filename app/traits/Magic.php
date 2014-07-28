<?php

trait Magic
{
    /**
     * @param $key
     * @return bool|mixed
     */
    public function __get($key)
    {
        return (isset($this->$key))
            ? $this->$key
            : false;
    }

    /**
     * @param $key
     * @param $value
     */
    public function __set($key, $value)
    {
        $this->$key = $value;
    }
}