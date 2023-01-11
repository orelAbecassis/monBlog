<form action="get-products-by-brand.php" method="GET">
    <label for="brandSelect">Sélectionnez une marque :</label>
    <select name="brandSelect" id="brandSelect">
        <?php
        require_once '../include.php';
        include '../Vues/header.php';
        $p = new Produit;
        $categList=$p->listerCateg();

        foreach ($categList as $brand) {
            echo '<option value="' . $brand->id . '">' . $brand->categ . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Afficher les produits de la marque séléctionée">
      
          </form>