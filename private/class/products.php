<?php

class products
{


    public function getAllProducts(): array
    {
        $rawProducts = file_get_contents(__DIR__ . "/../daten/products.json");
        $products = $rawProducts;
        $decodedProducts = html_entity_decode($products);
        $decodedText2 = $decodedProducts;

        return json_decode($decodedText2, true, 512, JSON_THROW_ON_ERROR);
    }

    public function getProductsByCategoryId(int $categoryId): array
    {
        $allProducts = $this->getAllProducts();
        // filter nach den richtigen Produkten aus der Kategorie und zurückgeben
    }

}