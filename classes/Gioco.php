<?php 
class Gioco{
    private string $animale;
    private string $materiale;
    private string $nome;
    private string $prezzo;
    private string $marca;
    private int $quantita;

    public function __construct($nome, $prezzo, $marca, $quantita, $animale, $materiale) {

        $this->animale = $animale;
        $this->materiale = $materiale;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->marca = $marca;
        $this->quantita = $quantita;
    }
}