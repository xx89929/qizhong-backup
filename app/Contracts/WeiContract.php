<?php

namespace App\Contracts;

interface WeiContract{


    //test
    public function callme($say);


    /**
     * 用户Code换取3rd_session_value
     * @param $rd_session
     * @param $code
     * @return mixed
     */
    public function CodeReturnRdSessionValue($rd_session , $code);

    /**
     * 获取3rd_session_value
     * @param $len
     * @return mixed
     */
    public function three_rd_session($len);
}