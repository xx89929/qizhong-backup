<?php
namespace App\Helpers;

function test_func(){
    echo 'test_function';
}


function three_rd_session($len) {


$fp = @fopen('/dev/urandom','rb');


$result = '';

if ($fp !== FALSE) {

    $result .= @fread($fp, $len);

    @fclose($fp);

} else {

    trigger_error('Can not open /dev/urandom.');

}


// convert from binary to string

$result = base64_encode($result);


// remove none url chars

$result = strtr($result, '+/', '-_');
    var_dump(substr($result, 0, $len));exit;

return substr($result, 0, $len);

}