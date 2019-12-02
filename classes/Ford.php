<?php

namespace Ttt;

class Ford extends Car
{
    public function __construct(){
        parent::__construct();
        echo "This is a Ford\n";
    }
}
