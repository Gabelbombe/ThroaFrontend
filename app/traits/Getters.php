<?php

Trait Getters
{
    /**
     * calls Class::$name()
     *
     * @param string $name the name of a requested property
     * @return mixed the result
     */

    public function __get($name)
    {
        return $this->__call($name);
    }

    /**
     * checks wether a get method get<$Name>() exists and calls it
     *
     * @param string $name
     * @param array  $args optional
     * @return mixed
     * @throws Exception
     */
    public function __call($name, $args = []) // array $args = [] ??
    {
        if (method_exists($this, $method = 'get' . ucfirst($name)))
            return $this->{$method} ($args);

        Throw New \Exception('Method or property does not exists');
    }
}