<?php
require "db.php";
$sql =  "SELECT * FROM joueur WHERE id = :id";
$id = $_GET["id"];
$statement = $connection->prepare($sql);
$statement->execute([":id" => $id]);
$joueur = $statement->fetch(PDO::FETCH_OBJ);
if(
    isset ($_POST["nom"]) &&
    isset ($_POST["numero"]) &&
    isset ($_POST["position"]) 
){
    $nom = $_POST["nom"];
    $numero = $_POST["numero"];
    $position = $_POST["position"];
$sql = "update joueur set nom=:nom, numero=:numero,  position=:position  where id=:id";
$statement = $connection->prepare($sql);
if($statement->execute(
  [
    ":nom" => $nom,
    ":numero" => $numero,
    ":position" => $position,
    ":id" => $id
  ]
)){
header("Location: /phpcrud");
}
}
?>





<?php include('./header.php') ?>
<h1>Ajouter un joueur</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 my-5">
            <?php if (!empty($message)) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $message; ?>
                
                </div>
            <?php endif; ?>

            <form method="post">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" value="<?=$joueur->nom ?>" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label>Numéro</label>
                    <input type="number" value="<?=$joueur->numero ?>" name="numero" class="form-control">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" value="<?=$joueur->position ?>" name="position" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




<?php include('./footer.php') ?>