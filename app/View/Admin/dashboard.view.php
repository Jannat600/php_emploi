<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="C:\AppServ\www\php_emploi\public\Ressources\css\style.css?v=<?php echo time(); ?>">
    <title>Page de Connexion</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" method="POST" action="http://localhost/php_emploi/public/index.php?action=init_h">
                    <h2 class="title">Creer Horaire</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="time" name="heure_debut" placeholder="Heure debut">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="time" name="heure_fin" placeholder="Heure Fin">

                        <input type="submit" value="login" class="btn solid">


                </form>

                <form method="POST" action="http://localhost/php_emploi/public/index.php?action=init_e">
                    <label for="Filiere">Filiere</label>
                    <select name="filiere" id="filiere">
                        <option value="select">Sélectionner la filiere</option>
                        <?php foreach ($filiere as $key => $value) echo "<option value=" . $value . ">" . $value . "</option>" ?>

                    </select>
                    <label for="niveau">Niveau</label>
                    <select name="niveau" id="niveau">
                        <option value="select">Sélectionner le niveau</option>
                        <?php foreach ($niveau as $key => $value) echo "<option value=" . $value . ">" . $value . "</option>" ?>
                    </select>
                    <label for="semestre">Semestre</label>
                    <select name="semestre" id="semestre">
                        <option value="select">Selectionner le semestre</option>
                        <option value="javascript">JavaScript</option>
                    </select>
                    <input type="submit" value="Submit" />
                </form>

            </div>
        </div>
    </div>
    <script>
        document.getElementById("filiere").addEventListener("change", function() {
            console.log(this.value)
        })
        document.getElementById("niveau").addEventListener("change", function() {
            console.log(this.value)
        })
    </script>


    <script src="C:\AppServ\www\php_emploi\public\Ressources\js\script.js"></script>

</body>

</html>