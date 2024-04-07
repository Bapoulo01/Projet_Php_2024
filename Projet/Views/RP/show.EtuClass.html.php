<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="liste.etudiant.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Liste des etudiant</title>
</head>
<body>
    <section>
        <div class="prof-body">
            <div class="container">
            <div class="pag"><a href="<?=path("classe" ,"show-classe")?>"><span style="margin:2% 0%" class="fa fa-long-arrow-left"></a></span></div>
                <h3>LISTE DES ETUDIANTS DE LA CLASSE DE L1DEVWEB</h3>
                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Classe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($EtuClass as $value):?>
                        <tr>
                            <td><?=$value["Prenom"]?></td>
                            <td><?=$value["Nom"]?></td>
                            <td><?=$value["matricule"]?></td>
                            <td><?=$value["libelle_classe"]?></td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>