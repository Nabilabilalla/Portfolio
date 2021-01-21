<?php
// Faire comprendre au navigateur ce qu'on lui répond :
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');


    include("db.php");
    $connexion = new PDO($url, $user, $pass); 
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $rqt = "INSERT INTO messages (message, conversation, date_message, user_id) VALUES (:message, :conversation, NOW(), 
    (select id from utilisateurs where email = :conversation))";
    //On prépare notre requête. ça nous renvoie un objet qui est notre requête préparée prête à être executée "; 

    try {
        $statement = $connexion->prepare($rqt);
        $statement->bindParam(':mail', $conversation);
        //On l'execute
        $statement->execute(); 
        // On récupère l'ensemble des résultats dans un tableau
        $results = $statement->fetchAll(PDO::FETCH_ASSOC); 
    } catch(Exception $exception) {
        echo $exception->getMessage(); 
    }
    // print_r sert à afficher un tableau sans trop s'embêter
   // print_r($results);

   //On renvoye ces résultats en JSON : 
   header('Content-Type: application/json');
   echo json_encode($results);
