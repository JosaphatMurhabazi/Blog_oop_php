<?php

namespace App\HTML;

use DateTime;

/**
 * Generate a nice form rapidly and easily
 */
class Form
{
    /**
     * @var array  data used by the form
     */
    public $data;
    /**
     * @var string Tag used for surrounding form
     */
    public $surround = 'p';

    /**
     * @param array $data data used by the form
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }
    /**
     * @param $html string data for form's content
     * @return string
     */
    public function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
    /**
     * @param $index string data for field value
     * @return string
     */
    public function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    /**
     * @param  $name string data for viewing the field 
     * @return string
     */
    public function input($name, $type)
    {
        return $this->surround('<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '"/>');
    }
    /**
     * @return string sending data
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}
