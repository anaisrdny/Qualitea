<header> 
<nav id="top">
<img src="./img/logo.png" alt="logo QualiTea">
<ul id="ul_top">
    <li><a href="./index.php?id=<?php echo $_SESSION['identifiant']?>">Accueil</href></a></li>
    <li><a href="./php/produits.php?categorie=the_vert?id=<?php echo $_SESSION['identifiant']?>">Thés verts</href></a></li>
    <li><a href="./php/produits.php?categorie=the_noir?id=<?php echo $_SESSION['identifiant']?>">Thés noirs</href></a></li>
    <li><a href="./php/produits.php?categorie=infusion?id=<?php echo $_SESSION['identifiant']?>">Infusions</href></a></li>
    <li><a href="./php/contact.php?id=<?php echo $_SESSION['identifiant']?>">Contact</href></a></li>
    <li><a href="./php/connexion.php?id=<?php echo $_SESSION['identifiant']?>">Connexion</href></a></li>
</ul>
</nav>
</header>
