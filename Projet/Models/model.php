<?php

//fonction pour la connexion
function connexion(string $login,string $mdp):array|null{
    $sql="select id, nom, prenom ,matricule, nom_Role as role from users u, role r  
    where u.id_role=r.id_role and login like '".$login."' and mdp like '".$mdp."' ";
  
    $data=null;
    //Classe PDO
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="projet_php_2024";
    // dd($sql);
     //On essaie de se connecter
    try {  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
      //Select
    //2-Executer la requete
    $statement = $conn->query( $sql); //resultat 
  
    //3-Recuperer les donnes de la requete
    $data= $statement->fetch(); //retourne plusieur resultat
    // dd($data);
    //4-fermer la connexion
    $conn==null;
    $statement==null;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    return $data;
  }

//fonction qui retoune tous les user
function findAllUsers():array{
    $sql="select * from users";
    //Classe PDO
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="projet_php_2024";
     //On essaie de se connecter
    try {  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
      //Select
    //2-Executer la requete
      $statement = $conn->query( $sql); //resultat 
  
    //3-Recuperer les donnes de la requete
      $data= $statement->fetchAll(); //retourne plusieur resultat
      // dd( $data);
    //4-fermer la connexion
      $conn==null;
      $statement==null;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    return $data;
    // return JsonToArr("users");
  }

  // fonction qui retourne les etudiants
function findAllEtudiant():array{
    $sql="select * from users u, role r WHERE u.id_Role = r.id_Role and nom_Role LIKE 'Etudiant' ";
    $data=null;
    //Classe PDO
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="projet_php_2024";
     //On essaie de se connecter
    try {  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
      //Select
    //2-Executer la requete
    $statement = $conn->query( $sql); //resultat 
  
    //3-Recuperer les donnes de la requete
    $data= $statement->fetchAll(); //retourne plusieur resultat
  
    //4-fermer la connexion
    $conn==null;
    $statement==null;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    return $data;
  }

  //fonction pour la connexion
function findEtuduantsById($etudiantId):array|null{
    $sql="select * from users u where id= ".$etudiantId;
    $data=null;
    //Classe PDO
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="projet_php_2024";
     //On essaie de se connecter
    try {  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
      //Select
    //2-Executer la requete
    $statement = $conn->query( $sql); //resultat 
  
    //3-Recuperer les donnes de la requete
    $data= $statement->fetch(); //retourne plusieur resultat
  
    //4-fermer la connexion
    $conn==null;
    $statement==null;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    return $data;
  }


  // fonction qui retourne les etudiants
  function findAllProf():array{
    $sql="select Prenom,Nom,Libelle_grade as grade,nom_specialite as FROM `users`u,`grade`g,`spécialité`s,role r 
    WHERE u.id_grade = g.id_grade and u.id_specialite = s.id_specialite AND nom_Role like 'ROLE_PROF' ";
    $data=null;
    //Classe PDO
    //1-Connexion SGBD et selectionner la BD
    $servername = 'localhost';
    $username = 'root';//root
    $password = '';
    $dbname="projet_php_2024";
     //On essaie de se connecter
    try {  
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // $conn->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
      //Select
    //2-Executer la requete
    $statement = $conn->query( $sql); //resultat 
  
    //3-Recuperer les donnes de la requete
    $data= $statement->fetchAll(); //retourne plusieur resultat
  
    //4-fermer la connexion
    $conn==null;
    $statement==null;
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    return $data;
  }