<?php

require_once('Component.php');
class Button implements Component
{
private $value;

    /**
     * Button constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function createComponent()
    {
        return '<button>'.$this->value.'</button>';
    }
}