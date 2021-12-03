<?php


class CartaCredito {
    protected $idUtente;
    protected $numCarta;
    protected $scadenzaCarta;

    function __construct($_idUtente, $_numCarta, $_scadenzaCarta)
    {
        $this->setIdUtente($_idUtente);
        $this->setNumCarta($_numCarta);
        $this->setScadenzaCarta($_scadenzaCarta);
    }


    // ******************************************************************
    // Funzioni set
    public function setIdUtente($newIdUtente) {
        if ($this->invalidNumberValue($newIdUtente)) return;

        $this->idUtente = $newIdUtente;
    }

    public function setNumCarta($newCarta) {
        if ($this->invalidNumberValue($newCarta) || $newCarta === $this->numCarta) return;

        $this->numCarta = $newCarta;
    }

    public function setScadenzaCarta($newScadenza) {
        if ($this->invalidStringValue($newScadenza)) return;

        $this->scadenzaCarta = $newScadenza;
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