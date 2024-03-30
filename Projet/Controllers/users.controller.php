<?php


if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="send") {
        $userConnect=connexion($_POST["login"],$_POST["mdp"]);
        // dd($_POST);
        if( $userConnect!=null){
            $_SESSION["userConnect"]=$userConnect;  // authentification 
           if ($userConnect["role"]=="ROLE_RP") {
            $profs=findAllProf();
            loadView("RP/liste.prof.html.php",["profs"=>$profs]);
           }
        //    else if ($userConnect["role"]=="ROLE_AC") {
        //     $profs=findAllProf();
        //     loadView("RP/liste.prof.html.php",["prof"=>$profs]);
        //    }
        //    else if ($userConnect["role"]=="ROLE_PROF") {
        //     $profs=findAllProf();
        //     loadView("RP/liste.prof.html.php",["prof"=>$profs]);
        //    }
        //    else if ($userConnect["role"]=="ROLE_ETUDIANT") {
        //     $profs=findAllProf();
        //     loadView("RP/liste.prof.html.php",["prof"=>$profs]);
        //    }
        }
        else{
         $message="Mot de pass Incorrect";
            require_once('../views/loging.html.php');
            header("location".WEBROOT);
        }
    }
}

     //Page par defaut
     else {
      // loadView("loging.html.php");
        require_once('../views/layout/connexion.layout.php');
    }
    