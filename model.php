<?php

class Model
{
    protected $attributes;
    public static $table;
    
    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }
    public function __get($name)
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name] : null;
    }
    public function getTableName()
    {
        return static::$table;
    }
