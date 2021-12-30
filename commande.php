<?php

 function ajouter($nom , $prix , $disponibilite , $quantite , $image)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO products (Nom , Prix , Disponibilite , Quantite , Image) VALUES (:nom , :prix , :disponibilite , :quantite , :image)");

     $req->execute(array(':nom'=> $nom , ':prix' =>  $prix , ':disponibilite' => $disponibilite , ':quantite'=>   $quantite , ':image'=>  $image) );

     $req->closeCursor();
   }
}

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM products ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM products WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>