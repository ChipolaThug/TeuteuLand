<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
        <title>Teuteu Land</title>
        <link   href="../CSS/traitement.css" rel="stylesheet" />
		<script type="text/javascript"  src="../JS/traitement.js" ></script>
    </head>
    <body>
        <p>Colonie : <?php echo htmlspecialchars($_POST['colonie']); ?> </p>
        <p>Nombre de teuteus : <?php echo htmlspecialchars($_POST['nbTeuteu']); ?> </p>

        <?php 
        if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0)
        {
            if ($_FILES['fichier']['size'] <= 2000000)
            {
                $infosfichier = pathinfo($_FILES['fichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $filename = strtolower($infosfichier['filename']);
                $colonie_name = strtolower(str_replace(' ', '', htmlspecialchars($_POST['colonie'])));
                echo '<p>' . $filename . ' ' . $colonie_name . '</p>';
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'txt');
                if (in_array($extension_upload, $extensions_autorisees) && $filename == $colonie_name)
                {
                     // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($_FILES['fichier']['name']));
                    echo "L'envoi a bien été effectué ! " . $infosfichier['filename'];
                }
            }
        }
        ?>
        <div id="jeu">
            <div id="pyramidePhoto">
                <div id="un" class="rangee">
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                </div>
                <div id="deux" class="rangee">
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                </div>
                <!-- <div id="trois" class="rangee">
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                </div>
                <div id="qautre" class="rangee">
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                </div>
                <div id="cing" class="rangee">
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                    <div class="enfant" ondrop=drop(event) ondragover=allowDrop(event)>
                    <img src="" draggable="true" ondragstart=drag(event)/>
                    </div>
                </div>
    -->
            </div>
            <div id="photoEnfant">
            </div>
        </div>
    </body>
</html>

