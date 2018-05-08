<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usermaster;

/**
 * UsermasterSearch represents the model behind the search form of `app\models\Usermaster`.
 */
class UsermasterSearch extends Usermaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['user_name', 'mail_address', 'tel_number'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usermaster::find(); //クエリを生成したからのプロパテゥイ

        // add conditions that should always apply here
        // 検索条件を追加する

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->on(static::EVENT_AFTER_FIND, function () {
            var_export('aaaa');
        });
        $this->load($params);
        $this->on(static::EVENT_BEFORE_VALIDATE, function () {
            var_export('test');
        });
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'mail_address', $this->mail_address])
            ->andFilterWhere(['like', 'tel_number', $this->tel_number]);

        return $dataProvider;
    }
}
