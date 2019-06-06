<?php

class User {
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;

    /**
     *Initialisation des propriétés de l'utilisateur à la construction de l'objet 
     *@var 
     */

    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
    }



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Ajoute et hash le mot de passe
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        // Hashage
        $hash = password_hash($password, PASSWORD_BCRYPT);
        // Stockage
        $this->password = $hash;
    }

    public function getStrParamsSQL(): string
    {
        // On crée un tableau avec les 3 propriétés
        $tab = [$this->username, $this->email, $this->password];
        // On crée une chaîne de caractères séparés de virgules et les quotes simples
        $str = implode("','", $tab);
        // On a ajoute une quote simple au début et une à la fin
        // On retourne l'ensemble
        return "'" . $str . "'" ;
    }
}