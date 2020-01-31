<?php


class FormBuilder
{
    protected $form;
    protected $radio;
    protected $textarea;
    protected $select;
    protected $input;
    protected $checkbox;
    protected $button;


    // faire le debut du formulaire
    public function starForm($method, $action, $name)
    {
        return "<div class='container ' <div class=\"card\" style=\"width: 40rem;\">  <div class=\"card-body bg-dark\">

<form class='needs-validation form-group mt-5 text-white-50' method='$method' action='$action' name='$name'>";
    }

    // faire la fin du formulaire
    public function endForm()
    {
        return '</form></div></div>';
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

//faire un input radio
    public function makeRadio($nameRadio, $textRadio)
    {
        return "<div><input type='radio' name='$nameRadio'><label>$textRadio</label></input></div>";

    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param mixed $radio
     */


// faire un textarea
    public function makeTextarea($name, $placeholder)
    {
        return "<textarea class=\"form-control text-center mt-2\" placeholder='$placeholder'></textarea>";
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
    public function setTextarea( $textarea)
    {
        $this->textarea = $textarea;
    }

//faire un input select avec options a definires
    public function makeSelect($name, $options)
    {
        $result = '<select class="custom-select mt-2">';
        foreach ($options as $elements) {
            $result .= $this->makeOption($elements);
        }
        $result .= '</select>';
        return $result;
    }

    private function makeOption( $elements)
    {
        return "<option>$elements</option>";
    }

    public function setSelect($select)
    {
        $this->select = $select;

    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }

//faire un input en choisissant le type, le name etc...
    public function makeInput($type, $name,$id, $placeholder)
    {
        return "<input  class=\"form-control text-center mt-2\" type='$type'  name='$name' placeholder='$placeholder' required>";
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


    public function makeCheckBox($nameCheckbox, $textLabel)
    {
        return "<div><input type='checkbox' name='$nameCheckbox'><label>$textLabel</label></input></div>";

    }


    /**
     * @return mixed
     */
    public function getCheckbox()
    {
        return $this->checkbox;
    }

    /**
     * @param mixed $checkbox
     */
    public function setCheckbox($checkbox)
    {
        $this->checkbox = $checkbox;
    }


    /**
     * @param mixed $select
     */

    public function makeButton($type, $name)
    {
        return "<button class='bg-success' type='$type' name='$name'>Validez</button>";
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


}