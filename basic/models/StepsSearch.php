<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Steps;

/**
 * StepsSearch represents the model behind the search form about `app\models\Steps`.
 */
class StepsSearch extends Steps
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stepid', 'userid'], 'integer'],
            [['stepname'], 'safe'],
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
        $query = Steps::find();

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
            'stepid' => $this->stepid,
            'userid' => $this->userid,
        ]);

        $query->andFilterWhere(['like', 'stepname', $this->stepname]);

        return $dataProvider;
    }
}
