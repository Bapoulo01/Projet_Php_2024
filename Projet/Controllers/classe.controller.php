<?php
// require_once('../models/article.model.php');

if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="show-classe") {
        $classes=findAllclasse();
        loadView("RP/liste.classe.html.php",["classes"=>$classes]);
    }
}