<?php

class products
{


    public function product(): array
    {
        $products = file_get_contents(__DIR__ . "/../daten/products.json");
        $decodedText2 = html_entity_decode($products);
        try {
            $produktss = json_decode($decodedText2, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
        }

        return array($produktss);
    }


}