<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Box;

/**
 * BoxSearch represents the model behind the search form about `app\models\Box`.
 */
class BoxSearch extends Box
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['boxnoid', 'boxnumber', 'screenid'], 'integer'],
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
        $query = Box::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'boxnoid' => $this->boxnoid,
            'boxnumber' => $this->boxnumber,
            'screenid' => $this->screenid,
        ]);

        return $dataProvider;
    }
}
