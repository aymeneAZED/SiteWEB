<?php
    require("../config/commande.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LuxuryWatch | Admin</title>
    <link rel="stylesheet" href="style/styles1.css">
  </head>
  <body>
    <div class="center">
      <h1>Ajouter Un Produit</h1>
      <form method="POST">
        <div class="txt_field">
          <input type="text" name="nom" required>
          <span></span>
          <label>nom</label>
        </div>
        <div class="txt_field">
          <input type="number" name="prix" required>
          <span></span>
          <label>prix</label>
        </div>
        <div class="txt_field">
          <input type="text" name="disponibilite" required>
          <span></span>
          <label>Disponibilité</label>
        </div>
        <div class="txt_field">
          <input type="number" name="quantite" required>
          <span></span>
          <label>quantite</label>
        </div>
        <div class="txt_field">
          <input type="text" name="image" required>
          <span></span>
          <label>image</label>
        </div>
       
        <button class="submit" name="submit">
            Ajouter le produit
        </button>
        <br>
        <br>
      </form>
    </div>

  </body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        if( isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['disponibilite']) AND isset($_POST['quantite']) AND isset($_POST['image']) )
        {
            if(!empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['disponibilite']) AND !empty($_POST['quantite'])  AND !empty($_POST['image'])  )
            {
                
                $no   = htmlspecialchars(strip_tags($_POST['nom']));
                $pri  = htmlspecialchars(strip_tags($_POST['prix']));
                $disponibilit  = htmlspecialchars(strip_tags($_POST['disponibilite']));
                $quantit = htmlspecialchars(strip_tags($_POST['quantite']));
                $imag = htmlspecialchars(strip_tags($_POST['image']));

                try{
                    ajouter($no , $pri , $disponibilit , $quantit , $imag);
                }catch (Exception $e)
                {
                    $e->getMessage();
                }
              
            }
        }
    }
?>