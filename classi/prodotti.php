<?php 
    // istanzio la classe..
    class Prodotti {
      public $nome;
      public $descrizione;
      public $marca;
      public $prezzo;
     
    // costruttore
      function __construct($_nome, $_descrizione, $_marca, $_prezzo)
      {
          $this->nome = $_nome;
          $this->descrizione = $_descrizione;
          $this->marca = $_marca;
          $this->prezzo = $_prezzo;
      }
   
  }  


?>