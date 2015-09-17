<?php
namespace backend\models;
use yii\db\ActiveRecord;

class PersonaMySQL extends ActiveRecord
{
  /**
   * @inheritdoc
   */
  public static function tableName()
  {
      return 'persona';
  }
}
