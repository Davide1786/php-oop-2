<?php 
    // istanzio la classe..
    class Utente {
        // istanzio le proprieta
        
        public $nome;
        public $cognome;
        public $mail;
        public $citta;
        public $indirizzo;
        public $fascia;
        // public $Card;
        // public $test;
 
        // costruttore
        function __construct($_nome, $_cognome, $_mail, $_citta, $_indirizzo)
        {
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->mail = $_mail;
            $this->citta = $_citta;
            $this->indirizzo = $_indirizzo;
            $this->fascia = new FasciaUtente();
        }
        
        // metodo
        function setFascia($tipoFascia) {
            $this->fascia = $tipoFascia;
        }
        function setCard($scadenza) {
            $this->Card = $scadenza;
        }
        
        function getSconto() {
            //$this rappresenta l'oggetto che sarà costruito a runtime, con cui accedo a una proprietà, sull'oggetto di una classe
            return $this->fascia->sconto;
        }
    }


?>
