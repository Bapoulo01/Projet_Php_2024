<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Liste etudiants</title>
</head>
<body>
    <section>

        <div class="prof-body">
            <div class="container">
                <h3>LISTE DES ETUDIANTS</h3>
                <a href="inscrire.etudiant.html"><button class="button" type="submit">Inscrire <span class="fa fa-plus" ></span></button></a>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Prénom</td>
                            <td>Nom</td>
                            <td>Matricule</td>
                            <td>Classe</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Etudiants as $value):?>
                        <tr>
                            <td><?=$value["Prenom"]?></td>
                            <td><?=$value["Nom"]?></td>
                            <td><?=$value["matricule"]?></td>
                            <td><?=$value["classe"]?></td>
                            <td>
                                <a href="voir.absence1.html"><button class="bout" type="submit">Voir les absences</button></a>
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