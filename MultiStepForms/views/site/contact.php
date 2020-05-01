<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="site-contact">
    <?php
    $form = ActiveForm::begin([
                'validateOnSubmit' => false,
    ]);
    ?>
    <div class="tab"><h1>Informationen:</h1>
        <?= $form->field($model, 'email') ?>
<?= $form->field($model, 'phone') ?>
<?= $form->field($model, 'name') ?>
    </div>
    <div class="tab"><h1>Anbindung:</h1>
        <table style="table-layout: fixed;
               width: 100%;">
            <tbody>

                <tr>
                    <td class="td-header">&nbsp;<span><strong>Name</strong></span>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Preis**</span></strong>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Turnus</span></strong>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Active</span></strong>
                    </td>
                    <td id="a"class="td-header"><strong>&nbsp;<span >Menge</span></strong>
                    </td>
                </tr>
                <tr>
                    <td>Grundsystem - Warenwirtschaft</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td> <?= $form->field($model, 'checkWarenwirtschaft')->checkbox()->label(false) ?></td>
                    <td>
                    <?= $form->field($model, 'warenwirtschaft')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number'])->label(false) ?>
                    </td>
                </tr>
                </div>
                </td>
                </tr>
                <tr>
                    <td>Amazon</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td>    <?= $form->field($model, 'checkAmazon')->checkbox()->label(false) ?></td>
                    <td>
                    <?= $form->field($model, 'amazon')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Farfetch</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td>  <?= $form->field($model, 'checkFarfetch')->checkbox()->label(false) ?></td>
                    <td>
                    <?= $form->field($model, 'farfetch')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Onlineshop</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td> <?= $form->field($model, 'checkonlineshop')->checkbox()->label(false) ?></td>
                    <td>
                    <?= $form->field($model, 'onlineshop')->textInput(['autofocus' => true, 'skipOnEmpty' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>DHL</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td> <?= $form->field($model, 'checkDhl')->checkbox()->label(false) ?></td>
                    <td>
                    <?= $form->field($model, 'dhl')->textInput(['autofocus' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>dpd</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td>     <?= $form->field($model, 'checkDbd')->checkbox()->label(false) ?></td>
                    <td>
                    <?= $form->field($model, 'dbd')->textInput(['autofocus' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Schweizer Post</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td> <?= $form->field($model, 'checkblackPost')->checkbox()->label(false) ?></td>
                    <td>
                    <?= $form->field($model, 'blackPost')->textInput(['autofocus' => true, 'type' => 'number', 'min' => '1'])->label(false) ?>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="tab"><h1>Feauterus:</h1>
        <table>
            <tbody>
                <tr>
                    <td class="td-header">&nbsp;<span><strong>Name</strong></span>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Preis**</span></strong>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Turnus</span></strong>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Active</span></strong>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td>Datenanreicherung</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td>
                    <?= $form->field($model, 'checkDatenAnreicherung')->checkbox()->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Amazon Produktupload</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td>
                    <?= $form->field($model, 'checkamazonProduktupload')->checkbox()->label(false) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tab"><h1>Übersicht:</h1>  
        <table>
            <tbody>
                <tr>
                    <td class="td-header">&nbsp;<span><strong>Name</strong></span>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Preis**</span></strong>
                    </td>
                    <td class="td-header"><strong>&nbsp;<span >Turnus</span></strong>
                    <td class="td-header"><strong>&nbsp;<span >Summe</span></strong>
                    </td>
                </tr>
                <tr>
                    <td>Einrichtungspauschale</td>
                    <td>
                        299 €
                    </td>
                    <td>einmalig</td>
                    <td >
                        199 €
                    </td>
                </tr>
                <tr>
                    <td>Online Einführungs-Schulung (2 Stunden)</td>
                    <td>
                        199 €
                    </td>
                    <td>einmalig</td>
                    <td >
                        229 €
                    </td>
                </tr>
                <tr id="tr-Warenwirtschaft">
                    <td>Grundsystem - Warenwirtschaft</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td id="warenwirtschaft">
                    </td>
                </tr>
                <tr id="tr-amazon">
                    <td>Amazon</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td id="amazon">
                    </td>
                </tr>
                <tr id="tr-farfetch">
                    <td>Farfetch</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td id="farfetch">
                    </td>
                </tr>
                <tr id="tr-onlineshop">
                    <td>Onlineshop</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td id="onlineShop">
                    </td>
                </tr>
                <tr id="tr-dhl">
                    <td>DHL</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td id="dhl">
                    </td>
                </tr>
                <tr id="tr-dbd">
                    <td>dpd</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td id="dbd">
                    </td>
                </tr>
                <tr id="tr-blackpost">
                    <td>Schweizer Post</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td id ="blackpost">
                    </td>
                </tr>
                <tr id="tr-datenanreicherung">
                    <td>Datenanreicherung</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td>
                        49
                    </td>
                </tr>
                <tr id="tr-amazonproduktupload">
                    <td>Amazon Produktupload</td>
                    <td>
                        49 €
                    </td>
                    <td>monatlich</td>
                    <td >
                        49
                    </td>
                </tr>
                <tr >
                    <td>Telefon Support pro Minute</td>
                    <td>
                        2,25 €
                    </td>
                    <td>einmalig</td>
                    <td >
                        nach Abrechnung
                    </td>
                </tr>
                <tr >
                    <td>Mail Support </td>
                    <td>
                        kostenlos
                    </td>
                    <td>einmalig</td>
                    <td >
                        0.00 €
                    </td>
                </tr>
                <tr >
                    <td>Sonderprogrammierung pro Stunde</td>
                    <td>
                        150 €
                    </td>
                    <td>einmalig</td>
                    <td >
                        0.00 
                    </td>
                </tr>
                <tr >
                    <td>Summe</td>
                    <td></td>     
                    <td></td>
                    <td id="sum" >
                    </td>
                </tr>
            </tbody>
            </tbody>
        </table>
    </div>
    <div class ="footer-btn" >
  <?= Html::button('Vorherige', ['class' => 'btn btn-primary', 'id' => 'prevBtn', 'name' => 'contact-button']) ?>
<?= Html::Button('Nächste', ['class' => 'btn btn-primary', 'id' => 'nextBtn', 'name' => 'contact-button']) ?>
<?= Html::submitButton('Drucken und Versenden', ['class' => 'btn btn-primary', 'type' => 'submit', 'id' => 'submit']) ?>
    </div>
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
<?php ActiveForm::end(); ?>
</div>
</div>
</div>