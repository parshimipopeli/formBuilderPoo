<?php

/**
 * Class Validator
 */
class Validator
{
    /**
     * @var
     */
    protected $files;
    /**
     * @var array
     */
    protected $errors = [];
    /**
     * @var
     */
    protected $value;
    /**
     * @var
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param mixed $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {

        return empty($this->errors);
    }


    /**
     * @return $this methode pour la forme de l' email .Pour vérifier la validité d’un champ de texte ou l’on entre un email sous la forme abc123@cde456.aa ou abc123@cde456.aaa

     */
    public function isEmail()
    {
        if (!filter_var($this->value,FILTER_VALIDATE_EMAIL)){
            $this->errors[$this->name] = ' l\' email n\' est pas valide';
        }
        return $this;
    }


    /**
     * @return $this methode pour verifier que l' utilisateur à bien rentré une chaine de caractére
     */
    public function isString()
    {
        if (!is_string($this->value)) {
            $this->errors[$this->name] = " Le champ n'est pas  une chaine de caractères";
        }
        return $this;

    }

    /**
     * @return $this methode pour verifier que le' entrée de l' utilisateur est bien un nombre

     */
    public function isInt()
    {
        if (!is_int($this->value)) {
            $this->errors[$this->name] = "Le champ n' est pas un nombre ";
        }
        return $this;

    }
   //

    /**
     * @param $length  pour donner la taille maximale  autorisée d' un champs'
     */
    public function verifMaxLength($length)
    {
        if (strlen($this->value) > $length) {
            $this->errors[$this->name] = 'La valeur est trop grande';

        }
        return $this;
    }

    /**
     * @param $length    methode pour donner la taille minimum autorisée d' un champs

     */
    public function verifMinLength($length)
    {
        if (strlen($this->value) < $length) {
            $this->errors[$this->name] = 'La valeur est trop petite';

        }
        return $this;
    }

}