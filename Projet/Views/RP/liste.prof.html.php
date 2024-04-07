<?php
if(!isset($_GET["page"])) {
    $page=1;
}else{$page=$_GET["page"];}
$taille=count($profs);
$nombre_ligne=5;
$nombre_page=ceil($taille/$nombre_ligne);
// var_dump($nombre_page );
$position=($page-1)*$nombre_ligne;
$tab=array_slice($profs , $position, $nombre_ligne);
// var_dump($tab);
?>

<body>
    <section>
        <div class="prof-body">
            <div class="container">
                <h3 stl>LISTE DES PROFESSEURS</h3>
                <a href="<?=path("userconnect", "new-prof")?>"><button class="">Ajouter <span class="fa fa-plus" ></span></button></a>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Prenom</td>
                            <td>Nom</td>
                            <td>Grade</td>
                            <td>Spécialité</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <?php foreach ($tab as  $value):?>
                        <tbody>
                            <tr>
                                <td><?=$value["Prenom"]?></td>
                                <td><?=$value["Nom"]?></td>
                                <td><?=$value["Grade"]?></td>
                                <td><?=$value["Spécialité"]?></td>
                                <td>
                                    <span style="color: black;size: 150px;" class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                    <span style="color: red;size: 150px;margin-left: 2%;" class="fa fa-trash-o" aria-hidden="true"></span>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach;?>
                </table>
                <div style="margin:0 -8%" class="page">
                    <a href=""><span class="fa fa-long-arrow-left"></span></a>
                    <?php for ($i=1; $i <=$nombre_page ; $i++):?>
                  <a href="<?=WEBROOT;?>/?controller=userconnectaction=show-prof&page=<?= $i?>"><?= $i ?> </a>
                <?php endfor?>
                    <a href=""><span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
