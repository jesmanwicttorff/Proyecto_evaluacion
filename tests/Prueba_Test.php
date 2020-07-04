<?php
require './app/multiplo.php';


class Prueba_Test extends \PHPUnit\Framework\TestCase
{

    public function test_probar_multiplo_de_3()
    {
        $multiplo = new Multiplo();

        $this->assertEquals($multiplo->multiplo3(12),0,'Falabella');

    }

    public function test_probar_multiplo_de_5()
    {
        $multiplo = new Multiplo();

        $this->assertEquals($multiplo->multiplo5(10),0,'Eso');
    }


    public function test_probar_multiplo_de_3_5()
    {
        $multiplo = new Multiplo();

        $this->assertEquals($multiplo->multiplo3_5(90),0,'Linio');
    }
}
?>