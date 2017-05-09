<!--
    Auteurs: Arjan Peters, Jef van den Boorn, Gilles Gotwalt, Ekim Güvenir, Dustin Kwakernaat, Bang Nguyen
    Projectgroep: 33
-->


<?php
require "global.php";
require "header.php";
require "pdo_connection.php";

if (count($_POST) > 0 && isset($_POST['submit'])) {
    if (empty($_POST['title']) || empty($_POST['condition']) || empty($_POST['minimumbid']) || empty($_POST['description']) || empty($_POST['startdate']) ||
        empty($_POST['duration']) || empty($_POST['addimage']) || empty($_POST['agree'] )) {
        $error = "Een of meerdere velden zijn leeg";
    } else {
        $title          = $_POST['title'];
        $minimumbid     = $_POST['minimumbid'];
        $condition      = $_POST['condition'];
        $description    = $_POST['description'];
        $startdate      = $_POST['startdate'];
        $duration       = $_POST['duration'];
        $addimage       = $_POST['addimage'];

        $query = $pdo->prepare("INSERT INTO Voorwerp (Titel, Startprijs, Conditie, Beschrijving, Startdatum, Looptijd)
                                VALUES (?,?,?,?,?,?)");
        $query->execute($title, $condition, $minimumbid, $description, $startdate, $duration);
        $result = $query->fetch();

        $query = $pdo->prepare("INSERT INTO bestand (filenaam)
                                VALUES (?)");
        $query->execute($addimage);
        $result = $query->fetch();
    }
}


?>

<html>
<body>

<!-- Section -->
<div class="EApanel">
    <div class="container">
        <div class="row">
            <div class="span8 offset2">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h2 class="panel-title">Nieuw advertentie</h2>
                    </div>
                    <div class="panel-body">
                        <label for="category">Categorie</label>                                                          <!-- categorie -->
                        <div class="new-ad-input">
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form-control" placeholder="Categorie toevoegen">
                                        <?php
                                        //                                        $query = $pdo->prepare("SELECT *
                                        //                                        FROM Rubriek
                                        //                                        WHERE Volgnr = NULL");
                                        //                                        $query->execute();
                                        //                                        $resultHoofdcategorie = $query->fetchAll();
                                        //                                        foreach($resultHoofdcategorie as $hoofdcategorie){
                                        //                                            echo("<option>$hoofdcategorie</option>");
                                        //
                                        ////                                        }
                                        //                                        $zogenaamdenummer = 1;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" placeholder="Categorie toevoegen">
                                        <!--                                        --><?php
                                        //                                        $query = $pdo->prepare("SELECT TOP ". $aantal . "
                                        //                                        FROM Rubriek
                                        //                                        WHERE Volgnr = $zogenaamdenummer");
                                        //                                        $query->execute();
                                        //                                        $resultHoofdcategorie = $query->fetchAll();
                                        //                                        foreach($resultHoofdcategorie as $hoofdcategorie){
                                        //                                        echo("<option>$hoofdcategorie</option>");
                                        //
                                        //                                                                       }
                                        //                                        $zogenaamdeSubnummer = 2;

                                        //                                        $query = $pdo->prepare("SELECT *
                                        //                                        FROM Rubriek
                                        //                                        WHERE Volgnr = $zogenaamdenummer");
                                        //                                        $query->execute();
                                        //                                        $resultHoofdcategorie = $query->fetchAll();
                                        //                                        foreach($resultHoofdcategorie as $hoofdcategorie){
                                        //                                        echo("<option>$hoofdcategorie</option>");
                                        //
                                        //                                                                       }
                                        //                                        $zogenaamdeSubnummer = 2;
                                        //                                        ?>
                                        <option>Spelcomputers | Playstation 4</option>
                                        <option>Spelcomputers | Xbox One</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" placeholder="Categorie toevoegen">
                                        <option>Spelcomputers | Playstation 4</option>
                                        <option>Spelcomputers | Xbox One</option>
                                    </select>
                                </div>
                        </div>
                        <div class="new-ad-input">

                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset disabled>
                                        <div class="form-group">
                                            <select id="category" class="form-control">
                                                <option>Tot 2 categorieën gratis</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-outline-secondary">Categorie toevoegen</button>
                                </div>
                            </div>
                        </div>
                        <hr/>

                        <div class="new-ad-input">
                            <label for="title" class="col-2 col-form-label">Titel*</label>                                      <!-- titel -->
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control" type="text" placeholder="Voer een titel in.."
                                           id="title" name="title">
                                </div>
                            </div>
                        </div>

                        <div class="new-ad-input">
                            <div class="form-group">
                                <label for="condition">Conditie*</label>                                                         <!-- conditie -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <select class="form-control" id="condition" name="condition" width="1">
                                            <option>Nieuw</option>
                                            <option>Zo goed als nieuw</option>
                                            <option>Gebruikt</option>
                                            <option>Niet van toepassing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="new-ad-input">
                            <label for="minimumbid">Minimumbod*</label>                                                       <!-- minimum bod -->
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon">€</div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" id="minimumbid" placeholder="00,00" name="minimumbid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="new-ad-input">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleTextarea">Beschrijving*</label>                                   <!-- beschrijving -->
                                        <textarea class="form-control" id="exampleTextarea" name="description" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <div class="date-input">
                            <div class="form-group row">
                            <label for="listing-start" class="col-2 col-form-label">Startdatum*</label>                      <!-- startdatum -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-control" type="datetime-local" value="" id="listing-start" name="startdate">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="new-ad-input">
                            <div class="form-group">
                                <label for="looptijd">Looptijd*</label>                                                         <!-- looptijd -->
                                <div class="row">
                                    <div class="col-md-2">
                                        <select class="form-control" id="looptijd" name="duration" width="1">
                                            <option>1 dag</option>
                                            <option>3 dagen</option>
                                            <option>5 dagen</option>
                                            <option>7 dagen</option>
                                            <option>10 dagen</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <small id="required" class="form-text text-muted">* Verplichte velden</small>
                        <hr/>

                        <div class="new-ad-input">
                            <label for="add-image">Voeg een afbeelding toe</label>                                         <!-- afbeelding toevoegen -->
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="add-image" name="addimage" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Maximaal 128kb per afbeelding.</small>
                            </div>
                        </div>
                        <hr/>

                      <label for="terms-of-service">Algemene voorwaarden</label>                                            <!-- algemene voorwaarde -->
                        <p>Door het onderstaande aankruisvakje aan te klikken, ga je akkoord met de <a href="#">algemene
                                gebruiksvoorwaarden van EenmaalAndermaal</a> en neem je de volledige
                            verantwoordelijkheid voor de inhoud van de aanbieding en het aangeboden object.</p>
                        <div class="new-ad-input">
                            <div class="checkbox">
                            <label><input type="checkbox" value="" id="terms-of-service" name="agree">Ik ga akkoord</label> <!-- ik ga akkoord -->
                            </div>
                        </div>
                        <div class="new-ad-input">
                            <button type="button" class="btn btn-primary" name="submit">Advertentie plaatsen</button>        <!-- advertentie plaatsen -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php
require "footer.php";
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>