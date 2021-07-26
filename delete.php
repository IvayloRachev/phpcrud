<?php 
 require 'db.php';
 $id = $_GET["toto"];
 $sql = "DELETE FROM joueur WHERE id = :id";
 $statement = $connection->prepare($sql);
 if($statement->execute([":id" => $id])){
  header("Location: /phpcrud");
 };

?>