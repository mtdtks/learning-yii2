<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/01
 * Time: 16:26
 */

require __DIR__ . '/define.php';
echo (__DIR__);
//echo (__DIR__ . '/define.php');


//http://php.net/manual/ja/function.defined.php
var_dump(defined("test_str")); //true
var_dump(defined("Test_Str")); //true
var_dump(defined("TEST_STR")); //true
