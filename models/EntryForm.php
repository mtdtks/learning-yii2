<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/02
 * Time: 12:53
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }




}