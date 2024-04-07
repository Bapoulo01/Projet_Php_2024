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
                <div ><a href="liste.cour.html"><span style="margin: 1% 3%;font-size: 30px;cursor: pointer;color: black;" class="fa fa-arrow-circle-left"></a></span></div>
                <h3>PLANIFIER UNE SEANCE DE COURS </h3>
                <form class="seance"  method="post" action="<?=WEBROOT;?>">
                    <div>
                       <label for="">Date du cours</label><br>
                       <input type="date" name="date" id=""> 
                    </div>
                    <div>
                        <label for="">Début du cours</label><br>
                        <input type="time" name="debut" id=""> 
                     </div>
                     <div>
                        <label for="">Fin du cours</label><br>
                        <input type="time" name="fin" id=""> 
                     </div>
                     <input type="hidden" name="controller" value ="seance">
                     <button class="but" name="actin" value="addSeance" type="submit">Creer</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>