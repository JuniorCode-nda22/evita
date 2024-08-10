<?php

namespace siska\models;

use Yii;

/**
 * This is the model class for table "jenjang_pendidikan".
 *
 * @property int $id
 * @property string $jenjang
 */
class JenjangPendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenjang_pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenjang'], 'required'],
            [['jenjang'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenjang' => 'Jenjang',
        ];
    }

    /**
     * Returns an array suitable for use in a dropdown.
     *
     * @return array
     */
    public static function dropdown()
    {
        $sql = 'SELECT id, jenjang AS jenjang_pendidikan FROM jenjang_pendidikan';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return \yii\helpers\ArrayHelper::map($result, 'id', 'jenjang_pendidikan');
    }
}
