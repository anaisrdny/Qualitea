<section id="cote">
    <nav id="ul_side">
    <h2 style="color:#427a51">QualiTea</h2>
    <ul id="side">
            <li id="bouton_accueil"><a href="./index.php?id=<?php echo $_SESSION['identifiant']?>"style="color:#427a51">Accueil</href></a></li>
            <li><a href="./php/produits.php?categorie=the_vert?id=<?php echo $_SESSION['identifiant']?>" style="color:#427a51">Thés verts</href></a></li>
            <li><a href="./php/produits.php?categorie=the_noir?id=<?php echo $_SESSION['identifiant']?>" style="color:#427a51">Thés noirs</href></a></li>
            <li><a href="./php/produits.php?categorie=infusion?id=<?php echo $_SESSION['identifiant']?>" style="color:#427a51">Infusions</href></a></li>
            <li id="bouton_contact"><a href="./php/contact.php?id=<?php echo $_SESSION['identifiant']?>" style="color:#427a51">Contact</href></a></li>
    </ul>
    </nav>
</section>
