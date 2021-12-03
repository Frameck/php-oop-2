<?php

// require_once __DIR__ . "/User.php";
require_once __DIR__ . "./User.php";


class UserPrime extends User {
    protected $hasPrime;
    protected $discount;

    function __construct($_id, $_firstName, $_lastName)
    {
        parent::__construct($_id, $_firstName, $_lastName);
        $this->hasPrime = true;
        $this->discount = 20;
    }


    // ******************************************************************
    // Funzioni set
    public function setId($newId) {
        if ($this->invalidNumberValue($newId)) return;

        $this->id = $newId;
    }


    // ******************************************************************
    // Funzioni get
    public function getUserPrimeData($value) {
        return $this->$value;
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