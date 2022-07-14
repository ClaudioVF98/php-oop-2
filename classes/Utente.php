<?php

class Utente {

    private string $nome;
    private string $cognome;
    private string $indirizzo;
    private int $numeroTelefono;
    private int $cartaCredito;
    private string $validita = '';
    private string $scadenzaCC;
    private int $sconto = 0;


    public function __construct($nome, $cognome, $indirizzo, $numeroTelefono, $cartaCredito, $scadenzaCC){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->indirizzo = $indirizzo;
        $this->numeroTelefono = $numeroTelefono;
        $this->cartaCredito = $cartaCredito;
        $this->scadenzaCC = $scadenzaCC;
        $this->validitaCarta();
    }

    public function validitaCarta(){
        $dataOdierna = strtotime(date('m/d/Y'));
        $dataScadenza = strtotime($this->scadenzaCC);

        if ($dataOdierna >= $dataScadenza) {
            $this->validita = 'La carta non è valida';
        } else {
            $this->validita = 'La carta è valida';
        }
    }
}
