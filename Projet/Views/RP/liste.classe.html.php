<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Liste classe</title>
</head>
<body>
    <section>
        <div class="prof-body">
            <div class="container">
                <h3>LISTE DES CLASSES</h3>
                <a href="ajout.classe.html"><button class="button" type="submit">Ajouter <span class="fa fa-plus" ></span></button></a>
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
                    <?php foreach ($classes as $value):?>
                    <tbody>
                        <tr>
                            <td><?=$value["Nom"]?></td>
                            <td><?=$value["Filiere"]?></td>
                            <td><?=$value["Niveau"]?></td>
                            <td>
                                <a href="liste.etudiantL1.html"><button class="bout" type="submit">Liste des Etudiants</button></a>
                            </td>
                            <td>
                                <span style="color: black;size: 150px;" class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                <span style="color: red;size: 150px;margin-left: 2%;" class="fa fa-trash-o" aria-hidden="true"></span>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>

                </table>
            </div>
        </div>
    </section>
</body>
</html>