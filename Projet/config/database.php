<?php
function openConnexion(){
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="commande_bd";
    $conn=null;
    try {  
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
      } catch(PDOException $e){
          echo "Erreur : " . $e->getMessage();
      }
      return $conn;
}

function closeConnexion($conn){
$conn=null;
}

function executeSelect(){

}

function executeUpdate(string $sql,array $data){
    $conn=openConnexion();
    //2-Executer la requete
    $statement = $conn->prepare( $sql); //resultat 
    //3-Recuperer les donnes de la requete
    $data= $statement->execute($data); //retourne plusieur resultat
    //Fermeture connexion
    closeConnexion($conn);
}