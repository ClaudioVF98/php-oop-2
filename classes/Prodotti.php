<?php

class Prodotti {

    private string $nome;
    private string $prezzo;
    private string $marca;
    private int $quantita;

    public function __construct($nome, $prezzo, $marca, $quantita){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->marca = $marca;
        $this->quantita = $quantita;
    }
    
}