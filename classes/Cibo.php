<?php 
class Cibo extends Prodotti{
    private string $marca;
    private int $quantita;


    public function __construct($nome, $prezzo, $marca, $quantita, $animale, $alimento) {
        parent::__construct($nome, $prezzo, $marca, $quantita);

        $this->animale = $animale;
        $this->alimento = $alimento;
    }
}