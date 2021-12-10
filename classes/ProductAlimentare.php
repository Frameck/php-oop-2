<?php

require_once __DIR__ . "/Product.php";


class ProductAlimentare extends Product {
    protected $type;

    function __construct($_id, $_name, $_price, $_type)
    {
        parent::__construct($_id, $_name, $_price);
        $this->setType($_type);
    }


    // ******************************************************************
    // Funzioni set
    public function setType($newType) {
        if ($this->invalidStringValue($newType)) return;

        $this->type = $newType;
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