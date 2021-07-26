<?php
require "db.php";
if(isset ($_POST["nom"]) && isset($_POST["numero"]) && isset($_POST["position"])){
    $nom = $_POST["nom"];
    $numero = $_POST["numero"];
    $position = $_POST["position"];
    $sql = "insert into joueur (nom, numero, position) values (:nom, :numero, :position)";
    $statement = $connection->prepare($sql);
    if($statement->execute([":nom"=>$nom, ":numero"=>$numero, ":position"=>$position])){
    print " a jour avec succes";
    };
}  
?>

<?php include('./header.php') ?>
<h1>Ajouter un joueur</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 my-5">
            <form method="post">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label>Numéro</label>
                    <input type="number" name="numero" class="form-control">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




<?php include('./footer.php') ?>