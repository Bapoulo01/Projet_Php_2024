<?php
if(!isset($_GET["page"])) {
    $page=1;
}else{$page=$_GET["page"];}
$taille=count($classes);
$nombre_ligne=4;
$nombre_page=ceil($taille/$nombre_ligne);
// var_dump($nombre_page );
$position=($page-1)*$nombre_ligne;
$tab=array_slice($classes , $position, $nombre_ligne);
// var_dump($tab);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEBROOT;?>/css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Liste classe</title>
</head>
<body>
    <section>
        <div class="prof-body">
            <div class="container">
                <h3>LISTE DES CLASSES</h3>
                <a href="<?=path("classe", "new-classe")?>"><button class="button" type="submit">Ajouter <span class="fa fa-plus" ></span></button></a>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Nom</td>
                            <td>Filière</td>
                            <td>Niveau</td>
                            <td>Etudiants</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    
                    <?php foreach ($tab as $value):?>
                    <tbody>
                        <tr>
                            <td><?=$value["Nom"]?></td>
                            <td><?=$value["Filiere"]?></td>
                            <td><?=$value["Niveau"]?></td>
                            <td>
                            
                            <a href="<?=WEBROOT?>/?controller=classe&action=Detail-EtuClass&idClasse=<?=$value['id_classe']?>">
                                <button class="bout">Liste des Etudiants</button>
                            </a>
                            </td>
                            <td>
                                <span style="color: black;size: 150px;" class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                <span style="color: red;size: 150px;margin-left: 2%;" class="fa fa-trash-o" aria-hidden="true"></span>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
                <div style="margin:-2% -10%" class="page">
                    <a href=""><span class="fa fa-long-arrow-left"></span></a>
                    <?php for ($i=1; $i <=$nombre_page ; $i++):?>
                  <a href="<?=WEBROOT;?>/?controller=classe&action=show-classe&page=<?= $i?>"><?= $i ?> </a>
                <?php endfor?>
                    <a href=""><span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>