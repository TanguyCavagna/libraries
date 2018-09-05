<?php

/**
 * Class Form
 * Create a form quickly and easyly
 */
class Form {

    /**
     * @var array Data use by the form
     */
    private $data;

    /**
     * @var string Tag use for surrounding the inputs
     */
    public $surround = 'p';

    /**
     * Form constructor.
     * @param array $data Data use by the form
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
     * @param $html string Html code to surround
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index string Get value of the given index
     * @return mixed|null
     */
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name)
    {
        return $this->surround(
            '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" />'
        );
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}