<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/04/26
 * Time: 15:03
 */

namespace app\models;
use yii\db\ActiveRecord;

class Customer extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * @return string このアクティブ・レコード・クラスと関連付けられるテーブルの名前
     */
    public static function tableName()
    {
        return '{{customer}}';
    }
}