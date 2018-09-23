<?php

namespace App;

class Helper
{
    public function getDeptInt($dept){
        switch($dept){
            case 'INST':
                return 1;
            case 'ETRX':
                return 2;
            case 'CMPN':
                return 3;
            case 'EXTC':
                return 4;
            case 'INFT':
                return 5;
        }
    }
}
?>