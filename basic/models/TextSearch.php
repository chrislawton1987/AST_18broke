<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Text;

/**
 * TextSearch represents the model behind the search form about `app\models\Text`.
 */
class TextSearch extends Text
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['textid', 'textpath', 'boxnoid'], 'integer'],
            [['created', 'updated', 'deleted'], 'safe'],
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
        $query = Text::find();

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
            'textid' => $this->textid,
            'textpath' => $this->textpath,
            'created' => $this->created,
            'updated' => $this->updated,
            'deleted' => $this->deleted,
            'boxnoid' => $this->boxnoid,
        ]);

        return $dataProvider;
    }
}
