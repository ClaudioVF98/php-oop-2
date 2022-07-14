<?php 
class Gioco extends Prodotti{
    private string $marca;
    private int $quantita;

    public function __construct($nome, $prezzo, $marca, $quantita, $animale, $materiale) {
        parent::__construct($nome, $prezzo, $marca, $quantita);

        $this->animale = $animale;
        $this->materiale = $materiale;
    }
}