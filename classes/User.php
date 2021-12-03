<?php


class User {
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $cart = [];
    protected $metodiPagamento = [];

    function __construct($_id, $_firstName, $_lastName)
    {
        $this->setId($_id);
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
    }


    // ******************************************************************
    // Funzioni set
    public function setId($newId) {
        if ($this->invalidNumberValue($newId)) return;

        $this->id = $newId;
    }

    public function setFirstName($newFirstName) {
        if ($this->invalidStringValue($newFirstName)) return;

        $this->firstName = $newFirstName;
    }

    public function setLastName($newLastName) {
        if ($this->invalidStringValue($newLastName)) return;

        $this->lastName = $newLastName;
    }


    // ******************************************************************
    // Funzioni get
    public function getUserData($value) {
        return $this->$value;
    }


    // ******************************************************************
    // Funzioni add
    public function addToCart($product) {
        $this->cart[] = $product;
    }

    public function addMetPagamento($metodo) {
        $this->metodiPagamento[] = $metodo;
    }


    // ******************************************************************
    // Funzioni per la validazione dei dati

    /** Ritorna true se il valore è vuoto, è un numero o è null */
    private function invalidStringValue($value) {
        return empty($value) || is_numeric($value) || is_null($value);
    }

    /** Ritorna true se il valore è vuoto, non è array o è null */
    private function invalidArrayValue($value) {
        return empty($value) || !is_array($value) || is_null($value);
    }

    /** Ritorna true se il valore è vuoto, non è numero o è null */
    private function invalidNumberValue($value) {
        return empty($value) || !is_numeric($value) || is_null($value);
    }
}


?>