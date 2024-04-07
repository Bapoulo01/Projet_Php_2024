<?php

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="show-classe") {
        $classes=findAllclasse();
        loadView("RP/liste.classe.html.php",["classes"=>$classes]);
    }
    if ($_REQUEST["action"]=="new-classe") {
        loadView("RP/Newliste.classe.html.php");
    }
    if ($_REQUEST["action"]=="Detail-EtuClass") {
        $EtuClass=findEtuduantsByClasseId($_REQUEST["idClasse"]);
        loadView("RP/show.EtuClass.html.php",["EtuClass"=>$EtuClass]);
    }
}