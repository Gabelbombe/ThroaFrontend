<?php

Namespace Traits
{
    Trait Setters
    {
        /**
         * @param string $name  prop name
         * @param mixed  $value the value
         * @return $this
         * @throws \Exception
         */
        public function __set($name, $value)
        {
            if (method_exists($this, $method = 'set' . ucfirst($name)))
            {
                $this->{$method} ($value);

                    return $this;
            }

            Throw New \Exception('Private or protected properties are not accessible');
        }
    }
}