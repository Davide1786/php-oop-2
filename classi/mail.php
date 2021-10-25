<?php 
   
   // istanzio la classe..
   class Email {
   
   public $to = "pippobaudo@mail.it";
   public $subject = "Acquisto store Napoli";
   public $message = "Gentile cliente, grazie per aver effettuato l'acquisto";

   function setEmail($_to, $_subject, $_message)
   {
      $this->to = $_to;
      $this->subject = $_subject;
      $this->message = $_message;
   }

}


?>
