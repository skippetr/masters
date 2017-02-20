<?php

namespace app\models;

use Yii;

class Masters {

    public static function getListOfMasters($region = 'none', $tech = 'none') {
        $params = [':type' => 1];
        $query = Yii::$app->db->createCommand('SELECT id FROM user WHERE type=:type')
            ->bindValues($params)
            ->queryAll();

        //TODO: make readble city and tech names e.g. Regions::findOne()
        
        $ids = array_column($query, 'id');
        $query = (new \yii\db\Query())->select(['name', 'bio', 'technic', 'city'])->from('profile');
        if ($region == 'none' and $tech == 'none')
            $query = $query->where(['user_id' => $ids]);
        elseif ($region != 'none' and $tech != 'none')
            $query = $query->where(['user_id' => $ids, 'city' => $region, 'technic' => $tech]);
        elseif ($region != 'none')
            $query = $query->where(['user_id' => $ids, 'city' => $region]);
        elseif ($tech != 'none')
            $query = $query->where(['user_id' => $ids, 'technic' => $tech]);

        $result = $query->createCommand()->queryAll();
        return $result;
    }

}

?>