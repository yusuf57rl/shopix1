<?php
class categories{


    public function clothes(): array
    {
        $categorie = file_get_contents("/home/yusuf/PhpstormProjects/shopix/private/daten/categorie.json");
        $decodedText = html_entity_decode($categorie);
        try {
            $produktjs = json_decode($decodedText, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
        }

        return array($produktjs);
    }


}