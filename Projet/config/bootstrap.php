<?php
// define("ROOT",str_replace("/public","",$_SERVER['DOCUMENT_ROOT']));

define("WEBROOT","http://localhost:9000");
require_once(ROOT."/config/helpers.php");
require_once(ROOT."/config/validator.php");
require_once(ROOT."/config/database.php");

require_once(ROOT."/Models/users.model.php");
require_once(ROOT."/Models/classe.model.php");


?>