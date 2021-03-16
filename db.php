<?PHP 
session_start();
$link = mysqli_connect("localhost", "signal", "E8kqGNJxCR0GUFvV", "signal"); 
define('PASSWORD_SALT','jhgjhgfhjgfju87587587');

function createAuthCode($lenth = 9)
{

    $chars = "ABCDEFGHIJKLMNOPQRSTUVEWXYZabcdefghijkmnopqrstuvwxyz023456789@#^";

    srand((float) microtime() * 1000000);

    $i = 0;

    $pass = '';

    while ($i <= $lenth) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;
    }

    return $pass;
}
?>