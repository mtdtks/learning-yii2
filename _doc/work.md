# 作業
途中から書き始めたので最初のUrlManagerを除きvalidatorあたりからです。
## UrlManagerでURLをきれいにする
 
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/'=>'site/index',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ],
        ],

## Yii2クライアントサイドでActiveFormを拡張する
https://www.yiiframework.com/doc/guide/2.0/ja/concept-events
### .on() とはなんだっけ
イベントハンドラ
https://www.yiiframework.com/doc/guide/2.0/ja/concept-events
* イベントの定義を文字列で指定する。
* 'beforeSubmit' など。
#### Modelちょっと調べる
C:\Users\t-matsuda\myYii\vendor\yiisoft\yii2\base\Model.php
* これなに`[[scenario]]`
* [モデル/シナリオ](https://www.yiiframework.com/doc/guide/2.0/ja/structure-models#attributes)

ちょっと脱線していた、ActiveFormの追加に戻る
        
[Yii 2.0 決定版ガイド/AJAX でフォームを送信する](https://www.yiiframework.com/doc/guide/3.0/ja/input-form-javascript)
わからん…

