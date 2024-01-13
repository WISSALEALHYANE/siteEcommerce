<?php
if (isset($_POST['submit_new_product'])) {
    //include functions
    require_once('connect.fun.php');
    require_once('loginFunctions.fun.php');
    // data grabbed from the login
    $nom = $_POST['nomproduit'];
    $prix = $_POST['prix'];
    $cartegorie_id = $_POST['cartegorie_id'];

    $query = "INSERT INTO produit (nomproduit, prix, idcategorie) VALUES (?, ?, ?)";
    $stmt = connect()->prepare($query);

    if (!$stmt->execute(array($nom, $prix, $cartegorie_id))) {
        $stmt = null;
        header('Location:products.php?error=stmtfailed');
        exit();
    }

   // $stmt = null;
    header('products.php?productAddedToDb');
}