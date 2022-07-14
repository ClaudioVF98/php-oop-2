<?php

class UtenteRegistrato extends Utente{

    private $premium = true;

    public function __construct($nome, $cognome, $indirizzo, $numeroTelefono, $cartaCredito, $scadenzaCC){
        parent::__construct($nome, $cognome, $indirizzo, $numeroTelefono, $cartaCredito, $scadenzaCC);

        $this->applicaSconto($this->premium);

    }

    public function applicaSconto($premium){
        if ($premium === 'true'){
            $this->sconto = 10;
        }
    }
}