<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Menu</title>
</head>
<body>
    <div class="Dashboard">
        <div class="infos">
                <div class="profil"><img src="../image/X.png" alt=""></div>
                <h3>Prénom & Nom:<?= $_SESSION["userConnect"]["prenom"]." ". $_SESSION["userConnect"]["nom"]?></h3>
                <!-- <h3>Année: <?= $anneeEncours["Libelle_annee"]?></h3>  -->
                  <!-- <h3>Classe: L2 Devweb</h3> -->


                  <h3>Role: <?= $_SESSION["userConnect"]["role"]?></h3>
        </div>
        <a href="tabbord.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-tasks" aria-hidden="true"></span>Tableau de bord</span></a>

        <?php if( $_SESSION["userConnect"]["role"]=="ROLE_RP"):?>
            <a href="<?=path("cours" , "show-cours")?>"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste des cours</a>
            <a href="<?=path("userconnect" , "show-prof")?>"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste des Professeur</a>
            <a href="<?=path("classe" ,"show-classe")?>"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste des Classes</a>
            <a href="<?=path("annee" ,"show-annee")?>"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-pencil-square-o"></span>Définir l'année scolaire</a>
        <?php endif ?>
        <?php if( $_SESSION["userConnect"]["role"]=="ROLE_AC"):?>
            <a href="<?=path("userconnect" , "show-etudiant")?>"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list" ></span>Liste des etudiants</a>
            <a href="<?=path("cours" , "show-cours")?>"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste des cours</a>
            <a href="liste.classe.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste des classes</a>
            <a href="liste.justification.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste des justifications</a>
        <?php endif ?>
        <?php if( $_SESSION["userConnect"]["role"]=="ROLE_PROF"):?>
            <a href="mes.cours.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste de mes cours</a>
            <a href="liste.etudiantL1.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Marquer une absence</a>
        <?php endif ?>
        <?php if( $_SESSION["userConnect"]["role"]=="ROLE_ETUDIANT"):?>
            <a href="list.cour.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Liste des cours</a>
            <a href="voir.absence1.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Voir mes absences</a>
            <a href="justification.html"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-list "></span>Mes justifications</a>
        <?php endif ?>

        <a href="<?=path("userconnect" ,"logout")?>"><span style="color: white;size: 100px;margin: 5% 3%;" class="fa fa-sign-out" ></span>Se Déconnecter</a>
    </div> 
</body>
</html>