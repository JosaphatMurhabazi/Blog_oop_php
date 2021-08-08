<?php

namespace App\HTML;

use App\HTML\Form;

class BootstrapForm extends Form
{
    /**
     * @param $html string data for form's content
     * @return string
     */
    public function surround($html)
    {
        return "<div class=\"form-group\">{$html}</div>";
    }
    /**
     * @param  $name string data for viewing the field 
     * @return string
     */
    public function input($name, $type)
    {
        return $this->surround(
            '<label>' . ucfirst($name) . '</label>' .
                '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control"/>'
        );
    }
    public function submit()
    {
        return '<button type="submit" class="btn btn-primary btn-block">Envoyer</button>';
    }
}
