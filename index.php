<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $c = new Carro(2);
        echo $c->getMotor();
        echo "teste de ramificação";
        
            
        class Carro{
            private $pneus;
            private $motor;
            
            public function __construct($motor) {
                $this->motor = $motor;
            }
            
            public function getMotor(){
                return $this->motor;
            }
            
        }
        
        ?>
    </body>
</html>
