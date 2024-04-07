<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Ajouter un professeur</title>
</head>
<body>
    <section>
        <div class="prof-body">
            <div class="container">
            <div class="pag"><a href="<?=path("userconnect" ,"show-prof")?>"><span style="margin:2% 0%" class="fa fa-long-arrow-left"></a></span></div>
                <h3>AJOUTER UN PROFESSEUR</h3>
                <form method="post" action="">
                    <div >
                        <label>Prénom</label>
                        <input class="inpt" type="text" name="Prenom">
                        <label style="margin-left: 10%;">Nom</label>
                        <input class="inpt" type="text" name="Nom">
                    </div>
                    <div>
                        <label >Login</label>
                        <input class="inpt" style="margin-left: 4%;" type="text" name="login">
                        <label style="margin-left: 5%;">password</label>
                         <input class="inpt" type="password" name="mdp">
                    </div>  
                    <div>
                        <label for="">Grade</label>
                        <select name="grade" id="">
                            <option value=""></option>
                            <option value="">Licence</option>
                            <option value="">Master</option>
                            <option value="">Doctorat</option>
                        </select>
                        <label style="margin-left: 2.5%;">Specialité</label>
                        <select name="specialite" id="">
                            <option value="All"></option>
                            <option value="Maths">Maths</option>
                            <option value="Algo">Algo</option>
                            <option value="Design">Design</option>
                            <option value="Anglais">Anglais</option>
                        </select>
                        <!-- <div style="margin-top: 5%;">
                            <label for="">Profile</label>
                            <input style="margin-left: 3%;width: 85%;" type="file" name="" id="">
                        </div> -->    
                    </div>
                <input type="hidden" name="controller" value="userconnect">
                <div class="position"><button class="" id="butt" name="action" value="addProf">Ajouter</button></div>
            
                </form>
                
            </div>
        </div>
    </section>
</body>
</html>