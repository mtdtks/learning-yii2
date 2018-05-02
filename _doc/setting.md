# learning-Yii2

* Yii2-app-basic
* XAMPP5.6.35
* Intellij Ultimate 2018.1


## 構築手順

- フレームワークのインストール
  1. まずXAMPPをインストーラから普通にインストール
  2. 次にローカルにPHPをインストール(例："C:\php\"に解凍)
　3. composerもインストーラでインストール
　4. composerのプロキシ設定
```
　# composerで使用するproxyに関する環境変数を設定

　set HTTP_PROXY=http://servername:port/

  set HTTP_PROXY_REQUEST_FULLURI=1

　set HTTPS_PROXY=http://servername:port/

  set HTTPS_PROXY_REQUEST_FULLURI=0
```
  5. comporserで雛形を作る
　# composerでひな形をつくる
```
composer create-project --prefer-dist yiisoft/yii2-app-basic project-name
```
- フレームワークの実行環境のテスト
  1.　走らせてみる    

- Apacheの設定(DocumentRootの設定)
　xampp\httpd内の場合は不要
  1. httpd.conf
  DocumentRootをYii2をインストールした場所に変更する

### XDebugの設定
　1. php.iniの設定
　phpinfo.phpを作って表示させてver等を確認
　2.dllをダウンロードしてXAMPPならphp\ext内に配置、名前を"php_xdebug.dll"に変更しておく。
　※php_xdebug.dllは最初から入ってるやつでOKだった。
　　バージョンはインストールされているPHPのバージョンに合わせること。
    https://gist.github.com/odan/1abe76d373a9cbb15bed
    
/web/phpinfo.php
    
```
<?php
phpinfo();
?>
```
　3. php.iniに以下を記載
```
  output_buffering = Off

  [XDebug]
  zend_extension = "c:\xampp\php\ext\php_xdebug-2.5.5-5.6-vc11.dll"
  xdebug.remote_autostart = 1
  xdebug.profiler_append = 0
  xdebug.profiler_enable = 0
  xdebug.profiler_enable_trigger = 0
  xdebug.profiler_output_dir = "c:\xampp\tmp"
  ;xdebug.profiler_output_name = "cachegrind.out.%t-%s"
  xdebug.remote_enable = 1
  xdebug.remote_handler = "dbgp"
  xdebug.remote_host = "127.0.0.1"
  xdebug.remote_log = "c:\xampp\tmp\xdebug.txt"
  xdebug.remote_port = 9000
  xdebug.trace_output_dir = "c:\xampp\tmp"
  ;36000 = 10h
  xdebug.remote_cookie_expire_time = 36000
  php_xdebug-2.5.5-5.6-vc11.dll
  ```
  編集後XAMPPを再起動させてphpinfoにXDebugの記載があればOK。

- IDEの連携の設定
　intellijにphp、yii-supportのpluginを追加。

### RewriteEngineの設定
C:\xampp\apache\httpd.conf
```
    ### for YiiFrameWork ###
    # use mod_rewrite for pretty URL support
    RewriteEngine on

    # if $showScriptName is false in UrlManager, do not allow accessing URLs with script name
    RewriteRule ^index.php/ - [L,R=404]

    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . ""

    # if $showScriptName is false in UrlManager, do not allow accessing URLs with script name
    #RewriteRule ^index.php/ - [L,R=404]
```

