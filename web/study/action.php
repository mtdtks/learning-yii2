<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/01
 * Time: 14:53
 */
?>
<?
echo 'test';
?>

こんにちは、<?php echo htmlspecialchars($_POST['name']); ?>さん
あなたは<?php echo (int)$_POST['age']; ?>歳です。



