<?php


function fetchProductsFromDb()
{
    $stmt = connect()->query("SELECT * FROM produit");

    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $product[$i] = $row;
        $i++;
    }

    $stmt = null;

    if (!empty($order)) {
        return $product;
    }
}