<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>study page.</title>
</head>
<body>


<?php

echo 'あたまから順にやる';
echo '<BR>';
echo 'http://php.net/manual/ja/index.php';
echo '<BR>';
echo 'test';
echo '<BR>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<BR>';
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Vivaldi') !== false) {
    echo 'あなたはVivaldiを使用しています<br />';
}

var_dump(strpos($_SERVER['HTTP_USER_AGENT'], 'Vivaldi'));
echo strtoupper('ssssss');
echo '<BR>';
echo strlen('aaa');
echo '<BR>';
echo strpos('aaaaaabaaaaaa', 'b');
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    ?>
    <h3>strposが非falseを返しました</h3>
    <center><b>あなたはInternet Explorerを使用しています</b></center>
    <?php
} else {
    ?>
    <h3>strposがfalseを返しました</h3>
    <center><marquee>あなたはInternet Explorerを使用していません</marquee></center>
    <?php
}
?>

<form action="action.php" method="post">
 名前: <input type="text" name="name" />
 年齢: <input type="text" name="age" />
 <input type="submit" />
</form>

<?php
$expression = 1;
?>

<?php if ($expression == true): ?>
    条件式が真の場合にこれが表示されます。
<?php else: ?>
    それ以外の場合にこちらが表示されます。
<?php endif; ?>


<?php echo 'XHTMLまたはXMLドキュメントの中でPHPコードを扱いたい場合は、このタグを使いましょう'; ?>

<!--
短縮型の echo タグを使って <?= 'この文字列を表示' ?> とすることもできます。-->
<!--これは PHP 5.4.0 以降では常に使えて、-->
<!--<?php echo 'この文字列を表示' ?> と同じ意味になります。-->

<? echo 'このコードは短縮型のタグに囲まれていますが、'.
    'short_open_tag が有効な場合ににしか動作しません'; ?>

<script language="php">
        echo '(FrontPageのような) いくつかのエディタは、このタグの中の処理命令を好みません';
</script>
<!-- この構文は、PHP 7.0.0 で削除されました。 -->

<!--
<% echo 'オプションでASP形式のタグを使用可能です'; %>
<%= $variable; %> これは、<% echo $variable; %> のショートカットです。
これらの構文は、PHP 7.0.0 で削除されました。
-->

<p>きょうはここまで05/01 15:17</p>
型/目次
http://php.net/manual/ja/language.types.php
はじめに
http://php.net/manual/ja/language.types.intro.php









</body>
</html>