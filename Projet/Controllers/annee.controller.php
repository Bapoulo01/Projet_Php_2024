<?php

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="show-annee") {
        $annees=findAllAnnee();
        loadView("RP/show.annee.html.php",["annees"=>$annees]);
    }
}