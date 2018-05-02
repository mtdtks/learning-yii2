<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Usermaster]].
 *
 * @see Usermaster
 */
class UsermasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Usermaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Usermaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
