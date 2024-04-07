
    <section>
        <div class="prof-body">
            <div class="container">
            <div class="pag"><a href="<?=path("annee" ,"show-annee")?>"><span style="margin:2% 0%" class="fa fa-long-arrow-left"></a></span></div>
                <h3>DEFINIR UNE NOUVELLE ANNEE </h3>
                <form class="annee-form"  method="post" action="<?=WEBROOT;?>">
                    <div>
                       <label for="">Entrer l'année scolaire</label><br>
                       <input type="text" name="annee" placeholder="Format (2023-2024)"> 
                    </div>
                    <input type="hidden"name="controller" value ="annee">
                    <button id="but-add" name="action" value="addAnnee">Creer</button>
                </form>
                <table class="table-style-annee">
                    <thead>
                        <tr>
                            <td>Annee Scolaire</td>
                            <td>Etat</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($annees as$value):?>
                        <tr>
                            <td><?=$value["Libelle_annee"]?></td>
                            <td><?=$value["etat"]?></td>
                        </tr>
                    </tbody>
                    <?php endforeach;?>
                </table> 
            </div>
        </div>
    </section>
