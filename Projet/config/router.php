<?php

if ((isset($_REQUEST["controller"]))) {
    if($_REQUEST["controller"]=="userconnect"){
        require_once(ROOT."/Controllers/users.controller.php");
    }
    else if($_REQUEST["controller"]=="classe"){
        require_once(ROOT."/Controllers/classe.controller.php");
    }

} else {
    require_once(ROOT."/Controllers/users.controller.php");
}