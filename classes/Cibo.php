<?php 
class Cibo{
    private string $animale;
    private string $alimento;
    private string $nome;
    private string $prezzo;
    private string $marca;
    private int $quantita;


    public function __construct($nome, $prezzo, $marca, $quantita, $animale, $alimento) {

        $this->animale = $animale;
        $this->alimento = $alimento;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->marca = $marca;
        $this->quantita = $quantita;
    }
}