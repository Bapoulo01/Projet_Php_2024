<?php

define("ROOT",str_replace("Public","",$_SERVER['DOCUMENT_ROOT']));
require_once(ROOT."/config/bootstrap.php");
session_start();

require_once(ROOT."/config/router.php");

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <?php if (isset($_REQUEST["action"])): ?>
    <link rel="stylesheet" href="<?=WEBROOT;?>/css/style.css">
    <?php endif ?>

    <?php if (!isset($_REQUEST["action"])): ?>
    <link rel="stylesheet" href="<?=WEBROOT;?>/css/loging.css">
    <?php endif ?>



</head>
<body>

</body>
</html>