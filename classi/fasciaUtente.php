
<?php 
   // istanzio la classe..
   class FasciaUtente {

      // istanzio la proprieta
      public $sconto;

      // costruttore
      function __construct()
      {
         $this->sconto = "Non hai ricevuto lo sconto" . $this->sconto;
      }

      // metodo
      function addTipologia($tipologia)
      {
         //se un oggetto è un'istanza della classe FasciaUtente
         if ($tipologia == "bronze")
         {
            $fascia = new Bronze();

         } elseif($tipologia == "silver")
         {
            $fascia = new Silver();

         } elseif($tipologia == 'gold')
         {
            $fascia = new Gold();
         }
            return $fascia;
      }
   }

   // estendo la classe FasciaUtente
   class Bronze extends FasciaUtente {
      // costruttore della sottoclasse(Bronze)
      function __construct()
      {
         $this->sconto = "Hai ricevuto lo sconto del: " . 10 . '%' . $this->sconto;
      }
   }
   
   // estendo la classe FasciaUtente
   class Silver extends FasciaUtente {
      // costruttore della sottoclasse(Silver)
      function __construct()
      {
         $this->sconto = "Hai ricevuto lo sconto del: " . 20 . '%' . $this->sconto;
      }
   }

   // estendo la classe FasciaUtente
   class Gold extends FasciaUtente {
      // costruttore della sottoclasse(Gold)
      function __construct()
      {
         $this->sconto = "Hai ricevuto lo sconto del: " . 50 . '%' . $this->sconto;
      }
   }

?>


