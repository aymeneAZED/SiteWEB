<?php
    require("config/commande.php");

    $Produits=afficher();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
    <title>LuxuryWatch | Favorite Brand</title>

    <!--FontAwesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<!--Barre de Navigation-->
    <nav>
         <h1 class="logo">LuxuryWatch</h1>
         <div class="onglet">
             <a href="index.html" class="nav">Home</a>
             <a href="product.php" class="nav">Products</a>
             <a href="contact.html" class="nav">Contact</a>
             <a href="about.html" class="nav">About</a>
             <a href="admin/index.php" class="nav">Account</a>
             <form>
                 <input type="search" placeholder="Search">
             </form>
             <a href=""><i class="fas fa-shopping-cart"></i></a>
         </div>
    </nav>

    <div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Special Watches With Special Offers</h1>
                <p class = "text-light">A watch is a portable timepiece intended to be carried or worn by a person. It is designed to keep a consistent movement despite the motions caused by the person's activities. ... In the 1960s the electronic quartz watch was invented, which was powered by a battery and kept time with a vibrating quartz crystal.</p>

                <div class = "product-items">
                    <!-- single product -->

                <?php foreach($Produits as $Produit) : ?>
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "<?= $Produit->Image ?>" alt = "product image">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> add to cart
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> buy now
                                    <span><i class = "fas fa-shopping-cart"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">lifestyle</h2>
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href = "#" class = "product-name"><?= $Produit->Nom ?></a>
                            <p class = "product-price"><?= $Produit->Disponibilite ?></p>
                            <p class = "product-price"><?= $Produit->Prix ?>$</p>
                        </div>

                    </div>
                <?php  endforeach; ?>
                    <!-- end of single product -->
                </div>
            </div>
        </div>








</body>
</html>