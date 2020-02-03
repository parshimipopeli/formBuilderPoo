<?php
//
///**
// * Class users
// */
//class users
//{
//    /**
//     * @var
//     */
//    private $nom;
//    /**
//     * @var
//     */
//    private $prenom;
//    /**
//     * @var
//     */
//    private $adresse;
//    /**
//     * @var
//     */
//    private $pays;
//    /**
//     * @var
//     */
//    private $date;
//    /**
//     * @var array
//     */
//    private $error = [];
//
//    /**
//     * @return mixed
//     */
//    public function getDate()
//    {
//        return $this->date;
//    }
//
//    /**
//     * @param mixed $date
//     */
//    public function setDate($date)
//    {
//        $this->date = $date;
//    }
//
//    /**
//     * @var
//     */
//    private $email;
//
//    /**
//     * @var
//     */
//    private $password;
//    /**
//     * @var
//     */
//    private $message;
//
//    /**
//     * users constructor.
//     * @param array $valeurs
//     */
//    public function __construct($valeurs = array())
//    {
//        if (!empty($valeurs))
//            $this->hydrate($valeurs);
//    }
//
//    /**
//     * @param $donnees
//     */
//    public function hydrate($donnees)
//    {
//        foreach ($donnees as $attribut => $valeur) {
//            $methode = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));
//            if (is_callable(array($this, $methode))) {
//                $this->$methode($valeur);
//            }
//        }
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getNom()
//    {
//        return $this->nom;
//    }
//
//    /**
//     * @param mixed $nom
//     */
//    public function setNom($nom)
//    {
//        if (!empty($nom)) {
//            $this->nom = $nom;
//        } else {
//            $this->error[] = 'Le champ nom est vide !';
//        }
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getPrenom()
//    {
//        return $this->prenom;
//    }
//
//    /**
//     * @param mixed $prenom
//     */
//    public function setPrenom($prenom)
//    {
//        if (!empty($prenom)) {
//            $this->nom = $prenom;
//        } else {
//            $this->error[] = 'Le champ prenom est vide !';
//        }
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAdresse()
//    {
//        return $this->adresse;
//    }
//
//    /**
//     * @param mixed $adresse
//     */
//    public function setAdresse($adresse)
//    {
//        if (!empty($adresse)) {
//            $this->adresse = $adresse;
//        } else {
//            $this->error[] = 'Le champ adresse est vide !';
//        }
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getPays()
//    {
//        return $this->pays;
//    }
//
//    /**
//     * @param mixed $pays
//     */
//    public function setPays($pays)
//    {
//        if (!empty($pays)) {
//            $this->pays = $pays;
//        } else {
//            $this->error[] = 'Le champ pays n\'est pas selectionné !';
//        }
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    /**
//     * @param mixed $email
//     */
//    public function setEmail($email)
//    {
//        if (!empty($email) && preg_match('#^[a-z0-9][a-z0-9._-]*@[a-z0-9_-]{2,}(\.[a-z]{2,4}){1,2}$#', $email)) {
//            $this->email = $email;
//        } else {
//            $this->error[] = 'Le champ email est vide ou l\' email n\' est pas valide';
//        }
//    }
//
//
//
//
//
//    /**
//     * @return mixed
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * @param mixed $password
//     */
//    public function setPassword($password): void
//    {
//        if(!empty($password) && strlen($password) >= 8 && preg_match("#(?=^.{8,}\$)((?=.*\\d)|(?=.*\\W+))(?![.\\n])(?=.*[A-Z])(?=.*[a-z]).*\$#", $password)){
//            $password = password_hash($password, PASSWORD_DEFAULT);
//        $this->password = $password;
//    }else{
//        $this->error[] = "votre mot de passe n' est pas valide ou le champ est vide";
//
//
//    }
//    }
//
//    /**
//     * @return mixed
//     */
//    public
//        /**
//         * @return mixed
//         */
//    function getMessage()
//    {
//        return $this->message;
//    }
//
//    /**
//     * @param mixed $message
//     */
//    public
//        /**
//         * @param mixed $message
//         */
//    function setMessage($message)
//    {
//        $this->message = $message;
//    }
//
//
//
//
//    /**
//     * @return array
//     */
//    public
//        /**
//         * @return mixed
//         */
//    function getError()
//    {
//        return $this->error;
//    }
//
//    /**
//     * @param array $error
//     */
//    public
//        /**
//         * @param array $error
//         */
//    function setError($error)
//    {
//        $this->error = $error;
//    }
//
//    /**
//     *
//     */
//    public function save()
//    {
//        $jsonOrigin = file_get_contents('json/usersJson');
//        $donneesJson = json_decode($jsonOrigin, true);
//
//        $array['firstName'] = $this->getNom();
//        $array['lastName'] = $this->getPrenom();
//        $array['adress'] = $this->getAdresse();
//        $array['pays'] = $this->getPays();
//        $array['date'] = $this->getDate();
//        $array['email'] = $this->getEmail();
//        $array['pwd'] = $this->getPassword();
//        $array['message'] = $this->getMessage();
//
//        file_put_contents('json/usersJson', json_encode($array, JSON_PRETTY_PRINT), FILE_APPEND);
//    }
//    /**
//     * @return bool
//     */
//    public function isValid(){
//        if (count($this->error) == 0){
//            return true;
//        }else{
//            return false;
//        }
//    }
//
//}