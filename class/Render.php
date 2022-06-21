<?php
namespace ENTERPRISE; // KURIAME STATINĮ METODĄ - INFORMACIJOS IŠVEDIMUI IR SAU DARBO PALENGVINIMUI, ŠVARESNIAM KODUI
class Render {
    /*norint panaudoti statinį metodą NEREIKIA KURTI OBJEKTO. Darome masyvo atspausdinimui, kad nereiktų foreach
    veiks kaip globali f-ja, išvkviečiama pagal poreikį. */
    static public function showInfo($employer){ //ATKREIPTI DĖMESĮ Į static - apibrėžiame statinį metodą
        $tableHeader = '<div class="container-fluid p-0 bg-info vh-100"><br><h2 style="text-align: center;">ĮMONĖS DARBUOTOJAI</h2><br>';
        $tableHeader .= '<table class="table table-hover table-bordered table-sm table-striped" style="width: 85%; margin: 0 auto;"';
        $tableHeader .= 'style="margin-left: auto; margin-right: auto; background-color: #EDEDED; font-size: 14px;">
<thead class="table-primary text-center align-middle" style="border: solid 2px">
<tr><th>Vardas</th><th>Pavardė</th><th>Asmens kodas</th><th>Telefono Nr.</th><th>E.Pašto adresas</th><th>Adresas</th><th>Pareigos</th></tr></thead>
<tbody  class="text-center table-light"  style="font-size: small; vertical-align: middle">';
        echo($tableHeader);
        foreach($employer as $person){
            echo "<tr>";
            $person = array_values((array)$person);
            foreach($person as $value){
                echo("<td>$value</td>");
            }
            echo "</tr>";
        }
        echo '</tbody></table></div>';
    }
}