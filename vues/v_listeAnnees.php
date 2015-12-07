<h2>Gestion des frais<small> - Visiteur : <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></small></h2>
<h2>Mes fiches de frais</h2>
<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner une année : </h3>
    </div>
    <div class="col-md-4">
        <form action="index.php?uc=statAnnee&action=selectionnerAnnee" method="post" role="form">
            <div class="form-group">
                <label for="lstAnnee" accesskey="n">Année : </label>
                <select id="lstAnnee" name="lstAnnee" class="form-control">
                    <?php
                    foreach ($lesAnnees as $uneAnnee) {
                        $annee = $uneAnnee['annee'];
                        $numAnnee = $uneAnnee['numAnnee'];
                        if ($annee == $anneeASelectionner) {
                            ?>
                            <option selected value="<?php echo $annee ?>"><?php echo $numAnnee  ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $annee ?>"><?php echo $numAnnee ?> </option>
                            <?php
                        }
                    }
                    
                    ?>    

                </select>
            </div>
            <input id="ok" type="submit" value="Valider" class="btn btn-success" role="button" />
            <input id="annuler" type="reset" value="Effacer" class="btn btn-danger" role="button" />
        </form>
    </div>
</div>