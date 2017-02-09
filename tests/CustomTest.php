<?php

use Jenssegers\Optimus\Optimus;

class CustomTest extends PHPUnit_Framework_TestCase
{
    public function testBasic()
    {

//        const MAX_INT = 1000000000000;//13 digits
//
//        var_dump(\Jenssegers\Optimus\Energon::generatePrime());//204370143667
//        ./optimus spark 204370143667
//        Prime: 204370143667
//        Inverse: 676326779
//        Random: 1054205207
//
//        new Optimus(204370143667, 676326779, 1054205207);


        $ob = new Optimus(204370143667, 676326779, 1054205207);

        $id = 10000000000; //11 digits

        $encoded = $ob->encode($id);
        $original = $ob->decode($encoded);

        print_r([$id, $encoded, $original]);

//        Array
//        (
//            [0] => 10000000000
//            [1] => 722264515863
//            [2] => 446746066944
//        )


//         encode?
//         (((int) $value * $this->prime) & static::MAX_INT) ^ $this->xor;
//         (((int) 10000000000 * 204370143667) & 1000000000000) ^ 1054205207; //722264515863
//
//         decode?
//         (((int) $value ^ $this->xor) * $this->inverse) & static::MAX_INT;
//         (((int) 722264515863 ^ 1054205207) * 676326779) & 1000000000000; //446746066944

    }
}