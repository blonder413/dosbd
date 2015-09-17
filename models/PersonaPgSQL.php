<?php
namespace app\models;
use yii\db\ActiveRecord;

class PersonaPgSQL extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
      return 'persona';
    }

    public static function getDb()
    {
        // use the "db2" application component
        return \Yii::$app->db2;
    }
}
