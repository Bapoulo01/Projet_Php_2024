<?php

if (isset($_REQUEST["action"])) {
    
    if ($_REQUEST["action"] == "logout") {
        unset($_SESSION["userConnect"]);
        session_destroy();
        header("location:".WEBROOT);
    }
    if ($_REQUEST["action"]=="send") {
        $userConnect=connexion($_POST["login"],$_POST["mdp"]);
        // dd($_POST);
        if( $userConnect!=null){
            $_SESSION["userConnect"]=$userConnect;  // authentification 
           if ($userConnect["role"]=="ROLE_RP") {
            $profs=findAllProf();

            loadView("RP/liste.prof.html.php",["profs"=>$profs]);
           }
           else if ($userConnect["role"]=="ROLE_AC") {
            $Etudiants=findAllEtudiant();
            loadView("AC/liste.etudiant.html.php",["Etudiants"=> $Etudiants]);
           }
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
            // require_once('../views/loging.html.php');
            header("location".WEBROOT);
        }
    }if(isset($_REQUEST["action"])){
        if ($_REQUEST["action"]!="send" && !isset($_SESSION["userConnect"]) ) {
            header("location".WEBROOT);
        exit;
    }
    else if ($_REQUEST["action"]=="show-prof") {
        $profs=findAllProf();
        loadView("RP/liste.prof.html.php",["profs"=>$profs]);
    }
    else if ($_REQUEST["action"]=="new-prof") {
        loadView("RP/Newliste.prof.html.php");
    }
    else if ($_REQUEST["action"]=="show-etudiant") {
        $Etudiants=findAllEtudiant();
        loadView("AC/liste.etudiant.html.php",["Etudiants"=> $Etudiants]);
       }
    
    // else if ($_REQUEST["action"]=="show-cours") {
    //     $profs=findAllProf();
    //     loadView("RP/liste.prof.html.php",["profs"=>$profs]);
    // }
} 
  
}

     //Page par defaut
     else {
    //   loadView("loging.html.php");
        require_once('../views/layout/connexion.layout.php');
    }
