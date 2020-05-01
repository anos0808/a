<?php

//

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="site-contact">
        <?php
        $form = ActiveForm::begin([
                    'validateOnSubmit' => false,
                    'id' => 'stepForm'
        ]);
        ?>
        <div class="tab" id="tabeInfo"><h1>Wer will Cloudstock benutzen?<p>geben Sie hier bitte Ihre Kontaktdaten ein:</p></h1>
            <?= $form->field($model, 'email')->textInput()->label('Email *') ?>
            <?= $form->field($model, 'phone')->textInput()->label('Telefonnummer:') ?>
            <?= $form->field($model, 'firma')->textInput()->label('Firma *') ?>
            <p>Die Felder mit * gezeigten sind pflichten  Zentrieren</p>
        </div>
        <div class="tab" id="tabContact"><h1>Welche Anbindung benötigen Sie?<p>Wählen Sie bitte alle Anbindunen die Sie mit Hilfe von Cloudstock synchronisieren wollen:</p></h1>
            <table  id="connectionTable" style="   table-layout: fixed;
                    width: 100%;">
                <tbody>
                    <tr id="tr-header">
                        <td class="td-header">&nbsp;<span><strong>Name</strong></span>
                        </td>
                        <td class="td-header"><strong>&nbsp;<span >Auswählen</span></strong>
                        </td>
                        <td class="td-header"><strong>&nbsp;<span >Menge</span></strong>
                        </td>
                    </tr>
                    <tr>
                        <td ><p>Grundsystem-Warenwirtschaft </p></td>
                        <td> <?= $form->field($model, 'checkWarenwirtschaft')->checkbox()->label(false) ?></td>
                        <td>
                            <?= $form->field($model, 'warenwirtschaft')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number'])->label(false) ?>
                        </td>
                    </tr>
                    </div>
                    </td>
                    </tr>
                    <tr>
                        <td ><p>Amazon</p></td>
                        <td>    <?= $form->field($model, 'checkAmazon')->checkbox()->label(false) ?></td>
                        <td>
                            <?= $form->field($model, 'amazon')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td> <p>Farfetch</p></td>

                        <td>  <?= $form->field($model, 'checkFarfetch')->checkbox()->label(false) ?></td>
                        <td>
                            <?= $form->field($model, 'farfetch')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td> <p>Onlineshop</p></td>
                        <td> <?= $form->field($model, 'checkonlineshop')->checkbox()->label(false) ?></td>
                        <td>
                            <?= $form->field($model, 'onlineshop')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td> <p>DHL</p></td>
                        <td> <?= $form->field($model, 'checkDhl')->checkbox()->label(false) ?></td>
                        <td>
                            <?= $form->field($model, 'dhl')->textInput(['autofocus' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td><p>dbd</p></td>
                        <td>     <?= $form->field($model, 'checkDbd')->checkbox()->label(false) ?></td>
                        <td>
                            <?= $form->field($model, 'dbd')->textInput(['autofocus' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Schweizer Post</p></td>
                        <td> <?= $form->field($model, 'checkblackPost')->checkbox()->label(false) ?></td>
                        <td>
                            <?= $form->field($model, 'blackPost')->textInput(['autofocus' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab" id="features"><h1>Wollen Sie zusätzliche Features? </h1>
            <table id="featerusTable">
                <tbody>
                    <tr id="tr-header">
                        <td class="td-header" >&nbsp;<span><strong>Name</strong></span>
                        </td>
                        <td class="td-header" ><strong>&nbsp;<span >Auswählen</span></strong>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td> <p>Datenanreicherung</p></td>
                        <td>
                            <?= $form->field($model, 'checkDatenAnreicherung')->checkbox()->label(false) ?>
                        </td>
                    </tr>
                    <tr>
                        <td> <p>Amazon Produktupload</p></td>

                        <td>
                            <?= $form->field($model, 'checkamazonProduktupload')->checkbox()->label(false) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab" id="result"><h1>Preisübersicht</h1>  
            <table id="resultTable">
                <tbody>
                    <tr id="tr-header">
                        <td class="td-header" >&nbsp;<span><strong>Name</strong></span>
                        </td>
                        <td class="td-header" ><strong>&nbsp;<span >Preis**</span></strong>
                        </td>
                        <td class="td-header" ><strong>&nbsp;<span >Turnus</span></strong>
                        <td class="td-header" ><strong>&nbsp;<span >Summe</span></strong>
                        </td>
                    </tr>
                    <tr id="tr-Warenwirtschaft">
                        <td> <p>Grundsystem - Warenwirtschaft</p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p id="warenwirtschaft"></p>
                        </td>
                    </tr>
                    <tr id="tr-amazon">
                        <td> <p>Amazon</p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p id="amazon"></p>
                        </td>
                    </tr>
                    <tr id="tr-farfetch">
                        <td> <p>Farfetch</p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p id="farfetch"></p>
                        </td>
                    </tr>
                    <tr id="tr-onlineshop">
                        <td> <p>Onlineshop</p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p id="onlineShop"></p>
                        </td>
                    </tr>
                    <tr id="tr-dhl">
                        <td> <p>DHL</p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p id="dhl"></p>
                        </td>
                    </tr>
                    <tr id="tr-dbd">
                        <td>  <p>dpd</p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p id="dbd"></p>
                        </td>
                    </tr>
                    <tr id="tr-blackpost">
                        <td> <p>Schweizer Post </p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p id ="blackpost"></p>
                        </td>
                    </tr>
                    <tr id="tr-datenanreicherung">
                        <td> <p>Datenanreicherung </p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                    </tr>
                    <tr id="tr-amazonproduktupload">
                        <td><p>Amazon Produktupload  </p></td>
                        <td>
                            <p>49 € </p>
                        </td>
                        <td> <p >monatlich  </p></td>
                        <td >
                            <p>49 € </p>
                        </td>
                    </tr>
                    <tr id="sum-month">
                        <td id="totalSum">Summe</td>
                        <td id ="extra"></td>     
                        <td id="totalSum">Monatlich</td>
                        <td >
                            <p id="sum" > 299 € </p>
                        </td>
                    </tr>
                    <tr>
                        <td> <p>Einrichtungspauschale</p></td>
                        <td>
                            <p> 299 € </p>
                        </td>
                        <td> <p >einmalig  </p></td>
                        <td >
                            <p> 299 € </p>
                        </td>
                    </tr>
                    <tr>
                        <td> <p>Online Einführungs-Schulung (2 Stunden)</p></td>
                        <td>
                            <p> 199 € </p>
                        </td>
                        <td> <p >einmalig  </p></td>
                        <td >
                            <p> 199 € </p>
                        </td>
                    </tr>
                    <tr >
                        <td id="totalSum">Summe</td>
                        <td id ="totalSum"></td>     
                        <td id="totalSum"><p>Einmalig</p></td> 
                        <td id="sum" >
                            <p> 498 € </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div  id ="info" >
                <p id="info-string">Telefon support pro Minute 25 € <br>Telefon support pro Minute kostenlose <br>Sonderprogrammierung pro Stunde 150  €</p>
                <p></p>
            </div>
            <div id="divcheckactive">
                <input type="checkbox" id="checkactive" name="vehicle1" value="Bike" style="width: 20px;">Ich willige ein, dass meine angegeben Daten zum Zweck der Durchführung der beantragten Dienstleistung gespeichert werden. Diese Daten werden nicht ohne meine Einwilligung weiter gegeben. Alles Weitere finden Sie in unserer Datenschutzerklärung unter cloudstock.io/datenschutz (href="https://cloudstock.io/impressum/"). Diese Einwilligung kann ich jederzeit unter der e-mail Anschrift datenschutz@cloudstock.io widerrufen.
            </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <span class="step" id="1"></span>
            <span class="step" id="2"></span>
            <span class="step" id="3"></span>
            <span class="step" id="4"></span>
        </div>
        <div class ="footer-btn" >
            <?= Html::button('Vorherige', ['class' => 'btn btn-primary', 'id' => 'prevBtn', 'name' => 'contact-button']) ?>
            <?= Html::Button('Nächste', ['class' => 'btn btn-primary', 'id' => 'nextBtn', 'name' => 'contact-button']) ?>
            <?= Html::submitButton('Drucken und Versenden ', ['class' => 'btn btn-primary', 'type' => 'submit', 'id' => 'submit']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>