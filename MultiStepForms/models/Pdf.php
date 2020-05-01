<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Pdf
 *
 * @author user
 */
class Pdf {

    /**
     * GetSum action.
     *
     * @return Sum
     */
    public function getSum($model) {
        return ($model->checkAmazon ? ($model->amazon != null) * 49 : 0) +
                ($model->checkWarenwirtschaft ? ($model->warenwirtschaft != null) * 49 : 0) +
                ($model->checkFarfetch ? ($model->farfetch != null) * 49 : 0) +
                ($model->checkonlineshop ? ($model->onlineshop != null) * 49 : 0) +
                ($model->checkDhl ? ($model->dhl != null) * 49 : 0) +
                ($model->checkDbd ? ($model->dbd != null) * 49 : 0) +
                ($model->checkblackPost ? ($model->blackPost != null) * 49 : 0) +
                ($model->checkDatenAnreicherung ? 49 : 0) +
                ($model->checkamazonProduktupload ? 49 : 0) +
                ($model->checkeingestellte ? 5 : 0) +
                ($model->checkangebundene ? 5 : 0) . " €";
    }

    function createPdf($product) {
        $html = "<style>th{height: 50px;font-size: 18.0883px; font-family: sans-serif; transform: scaleX(1.0067);}</style> <table ><tr><th style='width: 200px;th, td {height: 200px; border: 1px solid black;border-collapse: collapse;}'>Model</th><th style='width: 200px;'>Preis**</th><th style='width: 200px;'>Turnus</th>
            <th style='width: 200px;'>Menge</th><th style='width: 200px;'>Summe</th>
            </tr><br>";
        foreach ($product as $row) {
            $html .= "<tr style='width: 200px;height: 200px;'>";
            foreach ($row as $cell) {
                $html .= "<td style='width: 200px;text-align: center;font-size: 18.3333px; font-family: sans-serif; transform: scaleX(0.917574);'>" . $cell . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        $html .= "<div  id =info >
        <p
           >Telefon support pro Minute 25 € <br>Telefon support pro Minute kostenlose <br>Sonderprogrammierung pro Stunde 150  €</p>
         <p></p>
    </div>";
        $html .= "<div style='width: 922px;   
            border: 1px solid black;height: 30px;margin-top: 10px;'> *Jedes Modul kann monatlich dazu gebucht oder gekündigt werden. <br>
            **Alle Preiseverstehen sich zzgl. der gesetzlichen Mehrwertsteuer (19%).</div>";
        $html .= "<div style='width: 922px;   
            border: 1px solid black;height: 30px;margin-top: 50px;'> Grundsystem:</div>";
        $html .= "<div style='width: 922px;   
            border: 1px solid black;height: 30px;margin-top: 30px;'> Onlineshopsystem:</div>";
        $mpdf = new \Mpdf\Mpdf(['default_font_size' => 9, 'default_font' => 'dejavusans']);
        $mpdf->WriteHTML('<p>Angebot/Auftrag</p>');
        $mpdf->SetFontSize(200, 5);
        $mpdf->simpleTables = true;
        $mpdf->Image('https://cloudstock.io/wp-content/uploads/2018/06/Cloudstock_Logo-1-300x146.png', 130, 0, 60, 30, 'png', '', true, false);
        $mpdf->WriteHTML($html);
        $mpdf->WriteHTML("<style>div{float: left;width: 250px; height: 100px; margin-right: 90px;display: inline-block;}</style><div style='margin-top: 100px;'>
            <p>CloudStock GmbH <br>Am Sandtorkai 54<br> DE-20457 Hamburg.</p>
            </div>
            <div style='margin-left: 30%;display: inline-block;'><p>Tel.: +49 40 609909419<br>E-Mail : ralf@cloudstock.io<br> Web: www.cloudstock.io </p></div>");
        $mpdf->AddPage();
        $mpdf->WriteHTML(Pdf::createSecoundPageInPdf());
        $mpdf->Output();
        exit;
    }

    /**
     * Create Pdf.
     *
     * @return Secound Pag in Pdf
     */
    public function createSecoundPageInPdf() {
        return ' <html>
        <style>
        div{float: left;
            width: 250px; height: 100px; margin-right: 90px;
            display: inline-block;
        }
        </style>
        <body>
        <p>Ich ermächtige die Cloudstock GmbH, Zahlungen von meinem Konto mittels Lastschrift einzuziehen. Zugleich weise
        ich mein Kreditinstitut an, die von der softwerft GmbH auf mein Konto gezogenen Lastschriften einzulösen.
        Hinweis: Ich kann innerhalb von acht Wochen, beginnend mit dem Belastungsdatum, die Erstattung des belasteten
        Betrages verlangen. Es gelten dabei die mit meinem Kreditinstitut vereinbarten Bedingungen. Die erste monatliche
        Rate sowohl die Einmalkosten sind frühestens mit der Fertigstellung des Systems fällig.
        </p>
        <p>Hiermit erteile ich den oberstehenden Auftrag und erkläre mich mit den Nutzungsbedingungen der Cloudstock
        GmbH einverstanden. </p>
        <div>
        <div >
        ____________________________<br>
        Firma
         </div>
        <div >
        ____________________________<br>
        Strasse
        </div>
        </div>
        <div>
        <div>
        ____________________________<br>
         Kreditinstitut
        </div>
        <div>
        ____________________________<br>
        IBAN
        </div>
        </div>
        <div>
        <div>
        ____________________________<br>
        PLZ/Ort
        </div>
        <div>
        ____________________________<br>

        Gewünschter Nutzungsbeginn
        </div>
        </div>
        <div>
        <div>
        ____________________________<br>
        BIC
        </div>
        </div>
        <div>
        <div>
        ____________________________<br>
        Ort, Datum
        </div>
        </div>
        <div>
        <div>
        ____________________________<br>
         Unterschrift
        </div>
        <div>
        ____________________________<br>
        Name in Druckbuchstaben
        </div>
        </div>
        <div style="margin-top: 100px;">
         <p>CloudStock GmbH <br>Am Sandtorkai 54<br> DE-20457 Hamburg.</p>
         </div>
        <div style="margin-left: 30%;
        display: inline-block;">
        <p>
        Tel.: +49 40 609909419<br>E-Mail : ralf@cloudstock.io<br> Web: www.cloudstock.io </p>
        </div>
        </body>
        </html>';
    }

}
