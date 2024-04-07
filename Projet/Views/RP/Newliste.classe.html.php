<?php


?>

    <section>
        <div class="prof-body">
            <div class="container">
            <div class="pag"><a href="<?=path("classe" ,"show-classe")?>"><span style="margin:2% 0%" class="fa fa-long-arrow-left"></a></span></div>
                <h3>AJOUTER UNE CLASSE </h3>
                <form method="post" action="">
                    <div>
                        <label for="">Nom de la classe</label><br>
                        <input type="text" name="libelle_classe" > 
                    </div>
                    <div>
                        <label style="margin-left:1%">Filière</label><br>
                        <select id="choix" name="id_filiere" >
                            <option value=""></option>
                            <option value="DevWeb">DevWeb</option>
                            <option value="GL">GL</option>
                            <option value="Design">Design</option>
                            <option value="Réseau">Marketing</option>
                        </select>
                    </div>
                    <div>
                        <label style="margin-left:1%">Niveau</label><br>
                        <select id="choix" name="id_niveau">
                            <option value=""></option>
                            <option value="L1">L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                        </select>
                    </div>
                    <button id="bout" type="submit" name="action" value="addClasse">Creer</button></a>
                </form>
            </div>
        </div>
    </section>
