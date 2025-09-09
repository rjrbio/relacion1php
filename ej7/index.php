<?php

    if (isset($_POST["numero1" . "numero2" . "numero3"])) {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        if(($numero1 > $numero2) && ($numero1 > $numero3)){
            echo "$numero1 es el mayor";
            elseif($numero1 < $numero2) {
                echo "";

        }
}
?>