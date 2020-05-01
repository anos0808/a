<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Product
 *
 * @author user
 */
class Product {

    /**
     *
     * @return Product
     */
    public function getProduct($model) {
        $product = [["title" => "Einrichtungspauschale", "price" => "299 €", "turnus" => "einmalig", "menge" => "1", "sum" => "299 €"],
            ["title" => "Online Einführungs-Schulung (2 Stunden)", "price" => "199 €", "turnus" => "einmalig", "menge" => "1", "sum" => "199 €"],
            ["title" => "<h3>Summe</h3>", "price" => "", "turnus" => "einmalig", "menge" => "", "sum" => "498 €"]
        ];
        if (Product::isAnbingunSelected($model)) {
            $product[] = ["title" => "<h3>Anbindung</h3>", "price" => "", "turnus" => "", "menge" => "", "sum" => ""];
        }
        if ($model->checkWarenwirtschaft === "1" && $model->warenwirtschaft != null) {
            $product[] = ["title" => "Grundsystem - Warenwirtschaft", "price" => "49 €", "turnus" => "monatlich", "menge" => $model->warenwirtschaft, "sum" => $model->warenwirtschaft * 49 . " €"];
        }
        if ($model->checkAmazon === "1" && $model->amazon != null) {
            $product[] = ["title" => "Amazon", "price" => "49 €", "turnus" => "monatlich", "menge" => $model->amazon, "sum" => $model->amazon * 49 . " €"];
        }
        if ($model->checkFarfetch === "1" && $model->farfetch != null) {
            $product[] = ["title" => "Farfetch", "price" => "49 €", "turnus" => "monatlich", "menge" => $model->farfetch, "sum" => $model->farfetch * 49 . " €"];
        }
        if ($model->checkonlineshop === "1" && $model->onlineshop != null) {
            $product[] = ["title" => "Onlineshop", "price" => "49 €", "turnus" => "monatlich", "menge" => $model->onlineshop, "sum" => $model->onlineshop * 49 . " €"];
        }
        if ($model->checkDhl === "1" && $model->dhl != null) {
            $product[] = ["title" => "DHL", "price" => "49 €", "turnus" => "monatlich", "menge" => $model->dhl, "sum" => $model->dhl * 49 . " €"];
        }
        if ($model->checkDbd === "1" && $model->dbd != null) {
            $product[] = ["title" => "dbd", "price" => "49 €", "turnus" => "monatlich", "menge" => $model->dbd, "sum" => $model->dbd * 49 . " €"];
        }
        if ($model->checkblackPost === "1" && $model->blackPost != null) {
            $product[] = ["title" => "Schweizer Post", "price" => "49 €", "turnus" => "monatlich", "menge" => $model->blackPost, "sum" => $model->blackPost * 49 . " €"];
        }
        if (Product::isFeaturesSelected($model)) {
            $product[] = ["title" => "<h3>Features</h3>", "price" => "", "turnus" => "", "menge" => "", "sum" => ""];
        }
        if ($model->checkDatenAnreicherung === "1") {
            $product[] = ["title" => "Datenanreicherung", "price" => "49 €", "turnus" => "monatlich", "menge" => 1, "sum" => 49 . " €"];
        }
        if ($model->checkamazonProduktupload === "1") {
            $product[] = ["title" => "Amazon Produktupload", "price" => "49 €", "turnus" => "monatlich", "menge" => 1, "sum" => 49 . " €"];
        }

        $product[] = ["title" => "<h3>Datenvollumen</h3>", "price" => "", "turnus" => "", "menge" => "", "sum" => ""];
        $product[] = ["title" => "Eingestellte Artikel pro 5.000 Artikel", "price" => "5 €", "turnus" => "monatlich", "menge" => 1, "sum" => ""];
        $product[] = ["title" => "Angebundene Filialen pro Filiale ", "price" => "5 €", "turnus" => "monatlich", "menge" => 1, "sum" => ""];
        $product[] = ["title" => "<h3>Services</h3>", "price" => "", "turnus" => "", "menge" => "", "sum" => ""];

        $product[] = ["title" => "<h3>Summe</h3>", "price" => "", "turnus" => "monatlich", "menge" => "", "sum" => \app\models\Pdf::getSum($model)];
        return $product;
    }

    /**
     * @return ture if Anbindung selected
     */
    public function isAnbingunSelected($model) {
        if (($model->checkWarenwirtschaft === "1" && $model->warenwirtschaft != null) || ($model->checkAmazon == "1" && $model->amazon != null) ||
                ($model->checkFarfetch === "1" && $model->farfetch != null) || ($model->checkonlineshop === "1" && $model->onlineshop != null) ||
                ($model->checkDhl === "1" && $model->dhl != null) || ($model->checkDbd === "1" && $model->dbd != null) || ($model->checkblackPost === "1" && $model->blackPost != null)) {
            return true;
        }
    }

    /**
     * @return ture if Features selected
     */
    public function IsFeaturesSelected($model) {
        if (($model->checkDatenAnreicherung === "1" ) || ($model->checkamazonProduktupload === "1" )) {
            return true;
        }
    }

}
