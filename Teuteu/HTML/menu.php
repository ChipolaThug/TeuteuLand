<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
        <title>Teuteu Land</title>
        <link   href="../CSS/menu.css" rel="stylesheet" />
        <script type="text/javascript"  src="../JSON/BDD.json"></script>
		<script type="text/javascript"  src="../JS/menu.js" ></script>
    </head>
    <body>

        <form method="POST" action="traitement.php" enctype="multipart/form-data">
            <p></p>
            <p>
                <label for="colonie">Votre Colonie : </label>
                <input type="text" id="colonie" name="colonie" placeholder="Ex : Robinson" size="30" maxlength="30" required/>
            </p>

            <p>
                <label for="nbTeuteu">Combien y'a t'il de teuteu ?</label>
                <input type="number" id="nbTeuteu" name="nbTeuteu" min="1" max="31" step="1" required/>
            </p>

            <p>
                <label for="fichier">Trombinoscope (au format nomDeLaColonie.txt) : </label>
                <input type="file" name="fichier" id="fichier">
                <input type="reset" name="resetButton">
            </p>

            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>

