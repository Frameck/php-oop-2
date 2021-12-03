<?php


class Product {
    protected $id;
    protected $name;
    protected $price;

    function __construct($_id, $_name, $_price)
    {
        $this->setId($_id);
        $this->setName($_name);
        $this->setPrice($_price);
    }


    // ******************************************************************
    // Funzioni set
    public function setId($newId) {
        if ($this->invalidNumberValue($newId)) return;

        $this->id = $newId;
    }

    public function setName($newName) {
        if ($this->invalidStringValue($newName)) return;

        $this->name = $newName;
    }

    public function setPrice($newPrice) {
        if ($this->invalidNumberValue($newPrice)) return;

        $this->price = $newPrice;
    }


    // ******************************************************************
    // Funzioni get
    public function getProductData($value) {
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