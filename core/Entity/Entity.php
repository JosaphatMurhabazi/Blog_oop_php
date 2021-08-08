<?php

namespace Core\Entinty;

class Entity
{
    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->key = $this->$method();
    }
}
