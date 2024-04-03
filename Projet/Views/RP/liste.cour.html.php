<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Liste des Cours</title>
</head>
<body>
    <section>
        <div class="prof-body">
            <div class="container">
                <div ><a href="liste.prof.html"><span style="margin: 1% 3%;font-size: 30px;cursor: pointer;color: black;" class="fa fa-arrow-circle-left"></a></span></div>
                <h3 stl>LISTE DES COURS</h3>
                <a href="ajout.cour.html"><button class="button" type="submit">Ajouter <span class="fa fa-plus" ></span></button></a>
                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Professeur</th>
                            <th>Module</th>
                            <th>Classe</th>
                            <th>Heure total</th>
                            <th>Heure restante</th>
                            <th>Séance</th>
                            <th>Cours</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Amadou Ba</td>
                            <td>Maths</td>
                            <td>Master</td>
                            <td>40</td>
                            <td>20</td>
                            <td>
                            <a href="<?=WEBROOT;?>/?controller=seance&action=addSeance"><button class="bout" type="submit">Séance</button></a>
                            </td>
                            <td>
                            <a href="<?=WEBROOT;?>/?controller=seance&action=ShowSeance"><button  class="btn" type="submit">voir séance cours</button></a>
                            </td>
                            <td>
                                <span style="color: red;size: 150px;margin-left: 2%;" class="fa fa-trash-o" aria-hidden="true"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>