<?php


class FormBuilder
{
    protected $form;
    protected $input;
    protected $button;
    protected $textarea;
    protected $select;

    public function starForm($method, $action, $name)
    {
        return "<form class='needs-validation form-group' method='$method' action='$action' name='$name'>";
    }

    public function endForm()
    {
        return '</form>';
    }

    public function makeTextarea($placeholder)
    {
        return "<textarea class=\"form-control\" placeholder='$placeholder'></textarea>";
    }

    /**
     * @return mixed
     */
    public function getTextarea()
    {
        return $this->textarea;
    }

    /**
     * @param mixed $textarea
     */
    public function setTextarea($textarea)
    {
        $this->textarea = $textarea;
    }

    public function makeSelect($options)
    {
        $result = '<select class="custom-select ">';
        foreach ($options as $elements) {
            $result .= $this->makeOption($elements);
        }
        $result .= '</select>';
        return $result;
    }

    private function makeOption($elements)
    {
        return "<option>$elements</option>";
    }


    public function makeButton($type, $name)
    {
        return "<button class='bg-success' type='$type' name='$name'>Validez</button>";
    }

    public function makeInput($type, $name, $placeholder)
    {
        return " <div class='container'><input  class=\"form-control text-center\" type='$type'  name='$name' placeholder='$placeholder' required></div></div>";
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * @return mixed
     */
    public function getButton()
    {
        return $this->button;
    }

    /**
     * @param mixed $button
     */
    public function setButton($button)
    {
        $this->button = $button;
    }


    /**
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @param mixed $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }


}