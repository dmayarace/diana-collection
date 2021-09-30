<?php
require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase {
    public function testSuccessDisplayDrumHtml() {
        //expect the result of the test
        $expected= '';
        $expected .='<div class="drum">' . '<img src="Drums/' . 'img.jpeg' . '"/>' .
            '<p>Name: ' . 'doam' . ' </p>' .
                 '<p>Brand: ' . 'delux' . '</p>' .
                    '<p>Diameter: ' . '24'.'"'. '</p>' .
                         '<p>Number of notes: ' . '5' . '</p>' .
                             '<p>Color: ' . 'pink' . '</p>' .
                                 '</div>';
                                $input = [['img-url' => 'img.jpeg', 'name'=>'doam', 'manufacturer'=> 'delux', 'inches'=> '24', 'notes'=>'5', 'color'=> 'pink']];
                            $case = displayDrumHtml( $input);
                                $this->assertEquals($expected, $case);
    }


public function testFailureDisplayDrumHtml() {
    $expected = 'Error';
    $input = [];
    $case = displayDrumHtml($input);
    $this->assertEquals($expected, $case);
}
public function testMalformedDisplayDrumHtml()
{
    //input to test how it deals with an empty array
    $input = ' ';
    //set the test up to expect a specific error to be thrown by PHP
    $this->expectException(TypeError::class);
    //run the real function and pass the array in.
    displayDrumHtml($input);
}
}
