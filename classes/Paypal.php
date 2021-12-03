<?php


class Paypal {
    protected $idUtente;

    function __construct($_idUtente)
    {
        $this->setIdUtente($_idUtente);
    }


    // ******************************************************************
    // Funzioni set
    public function setIdUtente($newIdUtente) {
        if ($this->invalidNumberValue($newIdUtente)) return;

        $this->idUtente = $newIdUtente;
    }


    // ******************************************************************
    // Funzioni get
    public function getPaypalData($value) {
        return $this->$value;
    }


    // ******************************************************************
    // Funzioni per la validUtenteazione dei dati

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