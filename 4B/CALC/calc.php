<?php
 
        class Calculadora {

            public function Calcular() {

            
                if (isset($_POST['doCalc'])) {

                  
                    if ($_POST['operacao'] == "soma") {

                       
                        $resultado = $_POST['v1'] + $_POST['v2'];

                     
                        return $resultado;
                    } elseif ($_POST['operacao'] == "subtrai") {
                        $resultado = $_POST['v1'] - $_POST['v2'];
                        return $resultado;
                    } elseif ($_POST['operacao'] == 'multiplica') {
                        $resultado = $_POST['v1'] * $_POST['v2'];
                        return $resultado;
                    } elseif ($_POST['operacao'] == 'divide') {
                        $resultado = $_POST['v1'] / $_POST['v2'];
                        return $resultado;
                    }
                }
            }

        }

    
        $calcular = new Calculadora();

        echo $calcular->Calcular();
        ?>