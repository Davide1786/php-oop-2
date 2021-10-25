<?php 
   
   // istanzio la classe..
   class Card {
      // istanzio le proprieta
      public $date;
      public $numero;
      public $cvc;

      // costruttore
      function __construct($_date, $_numero, $_cvc)
      {
         try 
         {
            $this->setDate($_date); 
         } 
         catch (Exception $e)
         {
            echo $e->getMessage();
         }
         $this->numero = $_numero;
         $this->cvc = $_cvc;
         // $this->data = new CartaCredito();
      }

      // metodo
      function setDate($_date)
      {
         $_date = date('Y-m-j', strtotime($_date));  // prende in ingresso una stringa che contiene il riferimento temporale che si vuole convertire
         $this->date = date("Y-m-j"); // converto la stringa nella data che voglio
         if(strtotime('now') < strtotime($_date))
         {
            $this->date = $_date;
            echo "La tua carta è in regola";
         }else
         {
            throw new Exception('Spiacenti! La carta è scaduta');    
         } 
     }
  

      function getData()
      {
         $this->date;
      }

      function getNumero()
      {
         return $this->numero;
      }
     
      function getCvc()
      {
         return $this->cvc;
      }
   }

   // estendo la classe FasciaUtente
   // class CartaCredito extends Card {
   //    // costruttore della sottoclasse(CartaCredito)
   //    function __construct()
   //    {
   //       $this->data = $this->data;
   //    }
   // }

   // $carta = new Card('17-03-2009', 1234567, 123);
   // $giorno-> getDate();
   // var_dump($giorno);


?>
