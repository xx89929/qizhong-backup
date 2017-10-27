<?php

namespace App\Services;

use App\Contracts\WeiContract;

class WeiService implements WeiContract
{
//这里我写一个服务方法，以被别的地方来调用
    public function callme($say)
    {
        echo $say;
    }
}



