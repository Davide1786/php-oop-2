<?php
    // Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online.
    // Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
    // Strutturare le classi gestendo l'ereditarietà dove necessario.
    // Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
    // oppure diverse tipologie di prodotti.
    // BONUS:
    // Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
    //         $c = new CreditCard(..);
    //         $user->insertCreditCard($c);Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).

    require_once 'classi/utente.php';
    require_once 'classi/fasciaUtente.php';
    require_once 'classi/card.php';
    // require_once 'classi/mail.php';
    
    $utente = new Utente('Azzurra', 'Avitabile', 'Napoli', 'azzurra@mail.it', 'Via Ciaone'); 
    $utente->getSconto();
    var_dump($utente);

    $utenteBronze = new Utente('Patrizia', 'Santoro', 'Napoli', 'patriziasantoro@mail.com', 'Via Rosso'); 
    $utenteBronze->setFascia(new Bronze());
    var_dump($utenteBronze);


    $utenteSilver = new Utente('Ciro', 'Di Marzio', 'Napoli', 'cirodimarzio@mail.it', 'Via Povero'); 
    $utenteSilver->setFascia(new Silver());
    $carta = new Card('17-03-2029', 123458867, 223);
    $utenteSilver->setCard($carta);
    var_dump($utenteSilver);
    

    $utentePremium = new Utente('Gennaro', 'Savastano', 'Napoli', 'gennarosavastano@mail.com', 'Via Giallo'); 
    $utentePremium->setFascia(new Gold());
    var_dump($utentePremium);
    
    // $mail = new Email('pippobaudo@mail.it', 'Acquisto store Napoli', 'Gentile cliente, grazie per aver effettuato l\'acquisto'); 
    // var_dump($mail);

    
?>


