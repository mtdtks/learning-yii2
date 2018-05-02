<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/01
 * Time: 16:10
 */


// 定数を定義する
define("TEST_STR" , "hey", true);
//trueにすると大文字小文字区別しない
echo TEST_STR;
echo Test_Str;
echo test_str;

/* error
//php7以降有効
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // "cat" を出力します
*/


var_dump(defined("test_str")); //true
var_dump(defined("Test_Str")); //true
var_dump(defined("TEST_STR")); //true

?>
