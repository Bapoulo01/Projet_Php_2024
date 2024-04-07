<?php
if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="new-seance") {
        loadView("RP/show.seance.html.php");
    }
}